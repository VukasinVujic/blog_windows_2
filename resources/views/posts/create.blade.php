<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="http://localhost/VIVIFY/napredni/Laravel/Predavanje_2/radOdKuce/blog/public/posts">
  @csrf
    <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Title</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="title" type="text" class="form-control
        {{ $errors->has('title')? 'is-invalid':''}} " value={{ old('title')}}>
        @include('partials.invalid-feedback', ['field'=>'title' ])

      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Posts</label> 
    <div class="col-8">
      <textarea id="textarea" name="body" cols="40" rows="5" class="form-control
      {{ $errors->has('body') ? 'is-invalid' : ''}} " > {{ old('body')}}</textarea>
      @include('partials.invalid-feedback', ['field'=>'body'])
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>