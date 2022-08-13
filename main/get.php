<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <h2>Address Book</h2>
    <form class="" method="post" action="contact.php">
        <div class="col-sm-6">
            <div class="form-group">
        <label for="name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname"  required>
        <div id="emailHelp" class="form-text">First Name required</div>
        </div>
</div>
        <div class="col-sm-6">
        <div class="form-group">
        <label for="name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" required>
        <div id="emailHelp" class="form-text">Last Name required</div>
        </div>
        </div>

        <div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" >
    <div id="emailHelp" class="form-text">Email required.</div>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="name" class="form-label">Street</label>
    <input type="text" class="form-control" id="lname" name="street"  required>
    <div id="emailHelp" class="form-text">Street required</div>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
    <label for="name" class="form-label">Zip Code</label>
    <input type="text" class="form-control" id="zipcode" name="zipcode"  required>
    <div id="emailHelp" class="form-text">Zip Code required</div>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">

    <select id="city" class="form-control" name="cityname" required>
        <option value="">Select City</option>
        <option value="billing">Billing</option>
        <option value="marketing">Marketing</option>
        <option value="technical support">Technical Support</option>
    </select>
   
    <div id="emailHelp" class="form-text">City required</div>
  </div>
</div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    </div>