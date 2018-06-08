<div class="inner-addon left-addon">
    <i class="fa fa-user"></i>      
<input type="text" class="form-control" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}"/>
</div><br>
<div class="inner-addon left-addon">
    <i class="fa fa-battery-full"></i>      
<input type="text" class="form-control" name="status" value="{{ isset($registro->status) ? $registro->status : ''}}"/>
</div><br>