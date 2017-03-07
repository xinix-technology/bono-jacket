<?php 

namespace App\Library;

use Bono\App;
use Bono\Helper\URL;
use Norm\Cursor;

class Pagination
{
    /**
     * Static instance, you can create class via static method
     *
     * @var Libary\Pagination
     */
    protected static $instances = null;

    /**
     * Application context
     *
     * @var Bono\App
     */
    protected $app              = null;

    /**
     * Current page
     *
     * @var int
     */
    protected $current          = null;

    /**
     * Entries
     * @var Norm\Cursor
     */
    protected $entries          = null;

    /**
     * Limit of each collection that shown in a page
     *
     * @var int
     */
    protected $limit            = null;

    /**
     * Base URL that we use for paging
     *
     * @var string
     */
    protected $baseUrl = '';

    protected $querystring='';

    /**
     * Constructor
     *
     * @param Norm\Cursor $entries Entries that we want to page
     */
    public function __construct(Cursor $entries)
    {
        $this->entries = $entries;
        $this->app     = App::getInstance();
        $configCollection = $this->app->config('bono.providers')['Norm\\Provider\\NormProvider']['collections'];

        if (isset($configCollection['default'])) {
            if (isset($configCollection['default']['limit'])) {
                $this->limit = $configCollection['default']['limit'];
            }
        }

        if(!empty($_GET)){
            $querystring = '';
            foreach ($_GET as $key => $value) {
                if($key != '!skip' && $key != '!sort'){
                    if($querystring == '' ){
                        $querystring = $key . '=' . $value;
                    }else{
                        $querystring .='&' . $key . '=' . $value;
                    }
                }
            }
            
            $this->baseUrl = URL::current() .'?'. $querystring;
        }else{
            $this->baseUrl = URL::current() . '?';
        }

    }

    /**
     * Create new instance of Library\Pagination via static method
     *
     * @param Norm\Cursor $entries Entries that we want to page
     *
     * @return Library\Pagination New instance of Pagination class
     */
    public static function create(Cursor $entries)
    {
        $Class = get_called_class();

        if (is_null(static::$instances[$Class])) {
            static::$instances = new $Class($entries);
        }

        return static::$instances;
    }

    /**
     * Set out base URL
     *
     * @param [type] $url [description]
     */
    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;

        return $this;
    }

    /**
     * Paginate the entries into snipped collection
     *
     * @return string The HTML String that appended to our template
     */
    public function paginate()
    {
        $limit = $this->limit;

        if (is_null($limit)) {
            return;
        }

        $all     = $this->entries->count();
        $total = ceil($all / $limit);



        $skip    = $this->app->request->get('!skip');
        $this->current = floor($skip / $limit);

        if ($total == 1) {
            return;
        }else{

            if($total - 1 <= 10) {
                $page_type = "normal";
            }else{
                
                if($this->current  < 7){
                    $page_type = "left";
                }else{
                    if($total - $this->current <= 7){
                        $page_type = "right";
                    }else{
                        $page_type = "midle";
                    }
                }
            }
            
        }

        $paging = '';

        $paging = $paging. $this->firstPage();
        $paging = $paging. $this->prevPage();

        if($page_type == "normal"){
             for ($i = 0; $i < $total; $i++) {
                $isCurrent       = ($skip == ($i*$limit));
                $paging = $paging. $this->page($i, $isCurrent);
            }
        }elseif($page_type == "left"){
            $last = 5;
            if($this->current + 3 > $last){
                $last = $this->current + 3;
            }

            for ($i = 0; $i < $last; $i++) {
                $isCurrent       = ($skip == ($i*$limit));
                $paging = $paging. $this->page($i, $isCurrent);
            }
            $paging = $paging . '<li>...</li>';

            $last = 3;
            for ($i = $total - $last ; $i < $total; $i++) {
                $paging = $paging. $this->page($i, false);
            }
        }elseif($page_type == "right"){

            $last = 3;

            for ($i = 0; $i < $last; $i++) {
                $paging = $paging. $this->page($i, false);
            }
            
            $paging = $paging . '<li>...</li>';

            $last = 5;

            if(($total - $this->current) + 3 > $last){
                $last = ($total - $this->current) + 2;
            }

            for ($i = $total-$last ; $i < $total; $i++) {
                $isCurrent       = ($skip == ($i*$limit));
                $paging = $paging. $this->page($i, $isCurrent);
            }

        }else{
            $last = 3;

            for ($i = 0; $i < $last; $i++) {
                $paging = $paging. $this->page($i, false);
            }
            

            $paging = $paging . '<li>...</li>';
            $last=$this->current + 2;
            for ($i = $this->current - 2 ; $i < $last+1; $i++) {
                $isCurrent       = ($skip == ($i*$limit));
                $paging = $paging. $this->page($i, $isCurrent);
            }

            $paging = $paging . '<li>...</li>';

            $last = 3;
            
            for ($i = $total - $last ; $i < $total; $i++) {
                $paging = $paging. $this->page($i, false);
            }
            
        }
       

        $paging = $paging. $this->nextPage();
        $paging = $paging. $this->lastPage();

        return  $this->wrapPagination($paging);
    }

    private function lastPage()
    {
        $all     = $this->entries->count();
        $average = floor($all / $this->limit);
        if($this->current == $average) return '';
        $skip = $average * $this->limit;
        return '<li class="arrow-last"><a href="'.$this->baseUrl.'&!skip='.$skip.'"> >| </a></li>';
    }

    private function nextPage() {
        $all     = $this->entries->count();
        $average = floor($all / $this->limit);
        if($this->current == $average) return '';
        $skip = $this->limit * ($this->current + 1);
        return '<li class="next"><a href="'.$this->baseUrl.'&!skip='.$skip.'"> > </a></li>';
    }

    private function page($page, $isCurrent = false) {
        $skip = $this->limit * ($page);
        if($isCurrent) {
            return '<li class="active"><a href="'.$this->baseUrl.'&!skip='.$skip.'">'.($page + 1).'</a></li>';
        } else {
            return '<li><a href="'.$this->baseUrl.'&!skip='.$skip.'">'.($page + 1).'</a></li>';
        }
    }

    private function firstPage()
    {
        if($this->current == 0) return '';
        return '<li class="arrow-first"><a href="'.$this->baseUrl.'"> |< </a></li>';
    }

    private function prevPage()
    {
        if($this->current == 0) return '';
        $skip = $this->limit * ($this->current - 1);
        return '<li class="prev"><a href="'.$this->baseUrl.'&!skip='.$skip.'"> < </a></li>';
    }

    private function wrapPagination($html)
    {
        return '<ul class="pagination centered">'. $html . '</ul>';
    }
}
