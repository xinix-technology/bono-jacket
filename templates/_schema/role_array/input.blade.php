<?php 
	if(!empty($value)){
		if($value instanceof \Norm\Type\NormArray){
			$value = $value->toArray();
		}
		$datavalue = array();
		foreach ($value as $k => $v) {
			$datavalue[$v]=true;
		}
	}else{
		$datavalue = array();
	}

?>
<select name="<?php echo isset($name) ? $name : $self['name'] ?>[]" multiple>
    <?php foreach ($self->optionData() as $key => $entry): ?>
        <option value="<?php echo $self->optionValue($key,$entry) ?>" <?php echo (!empty($datavalue[$self->optionValue($key,$entry)]) ? 'selected' : '') ?>>
            <?php echo $self->optionLabel($key,$entry) ?>
        </option>
    <?php endforeach ?>
</select>