<div class="container col-xxl-8 px-4 py-3">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{asset('/images/cool.png')}}" id="hero_image" class="d-block mx-lg-auto img-fluid" alt="Hero" width="400" height="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-6 fw-bold lh-1 mb-3">Your brand new Micro Blogging Platform.</h1>
        <p class="lead">Ours is the Fury. Ours will be the Glory.</p>
        <div class="d-grid gap-2 d-md-flex">
          <a class="btn btn-dark btn-md px-4 me-md-2" href="#listings">See Listings</a>
          <a class="btn btn-outline-secondary btn-md px-4" href="/">Post Listings</a>
        </div>
      </div>
    </div>
</div>
<script>
    let hero_image = document.getElementById("hero_image");
    let choices = ['cool', 'hawk', 'batman', 'joy', 'hydra', 'troll', 'pheonix', 'dp', 'spidey']; 
    let choice = choices[0];
    
    // setInterval(() => { 
        choice = choices[(Math.random() * choices.length) | 0];
        hero_image.src = "<?php echo str(asset('/images/')); ?>/" + choice + ".png"; 
    // }, 500);
    
</script>