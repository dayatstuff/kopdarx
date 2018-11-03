<div class="form-group">
        <label for="title" class="control-label">{{ 'Title' }}</label>
        <input class="form-control" name="title" type="text" id="title">

</div>
<div class="form-group">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" >

</div>
    
    
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
    