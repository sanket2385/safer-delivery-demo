<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Safer.delivery - Step 3</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- STYLES -->
    <style>
      /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #333;
}

body {
  display: -ms-flexbox;
  display: flex;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  /* max-width: 42em; */
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
    </style>
</head>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Safer.delivery</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
  <div class="container form-container">
  <form action="<?=base_url()?>home/summary">
    <div class="form-group">
      <h1>How can we find your location?</h1>
      <label for="name">e.g. 700m on the right  after turning off B2165, 400m on the left from the junction with  Searle lane, 100m  from the  small bridge</label>
      <input type="text" class="form-control" id="name" placeholder="Type your answer here">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm">
            <div class="form-group">
            <label for="img1">Image 1</label>
            <input type="file" class="form-control" id="img1" placeholder="Image 1">
          </div>
          <div class="form-group">
            <img src="<?=base_url()?>uploads/7.png" width="50%" />
          </div>
          <div class="form-group">
            <label for="description1">Description</label>
            <textarea class="form-control" id="description1" rows="3" placeholder="700m on the right  after turning off B2165"></textarea>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="img2">Image 2</label>
            <input type="file" class="form-control" id="img2" placeholder="Image 2">
          </div>
          <div class="form-group">
            <img src="<?=base_url()?>uploads/8.png" width="50%" height="113px"/>
          </div>
          <div class="form-group">
            <label for="description2">Description</label>
            <textarea class="form-control" id="description2" rows="3" placeholder="400m on the left from the junction with  Searle lane"></textarea>
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="img2">Image 3</label>
            <input type="file" class="form-control" id="img3" placeholder="Image 3">
          </div>
          <div class="form-group">
            <img src="<?=base_url()?>uploads/9.png" width="50%" height="113px"/>
          </div>
          <div class="form-group">
            <label for="description3">Description</label>
            <textarea class="form-control" id="description3" rows="3" placeholder="100m  from the  small bridge"></textarea>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>© <?=date("Y")?> Safer.delivery</p>
    </div>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- -->
</body>
</html>
