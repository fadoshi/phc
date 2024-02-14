<?php
 $page = 'about';
 include_once("header.php");
?>

<section class="page-title bg-1 pt-0 pb-0">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mt-4 mb-4 text-lg">About Us</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<img src="images/about/doc.jpg" alt="Docter's photo" class="img-fluid">
			</div>
			<div class="col-lg-8">
				<h2>Arpan R. Doshi, MD</h2>
				<h3>Pediatric Cardiologist</h3>
				<div class="divider"></div>
				<p>
					Arpan R. Doshi, M.D. received his medical degree from India. 
					He completed his Pediatrics residency at Penn State Milton S Hershey Medical Center in Hershey, PA 
					and Pediatric Cardiology fellowship at University of Texas Health Science Center in Houston, TX. 
					He is board certified in Pediatric Cardiology by American Board of Pediatrics. 
					He specializes in congenital heart disease, preventive cardiology, general cardiology, echocardiography, and
					arrhythmia management. Prior to opening Pediatric Heart Care, 
					Dr. Doshi worked at Children’s Mercy Hospital where he served as Medical Director of Pediatric Cardiology in 
					Wichita, KS. Later on, he worked as a Pediatric Cardiologist at Pediatrix Cardiology of Houston. 
					At Pediatric Heart Care his goal is to provide comprehensive non-invasive pediatric cardiology care 
					to the community close to their home.					
				</p>
				<p>Dr. Doshi is accepting new patients at Pediatric Heart Care. We require all patients to have referral from the primary care physician's office.</p>
			</div>
		</div>
	</div>
</section>

<section class="mb-5">
	<div class="container">
    <h2 style="text-align: center;">Publications</h2>
		<?php $contents = file_get_contents("https://bibbase.org/show?bib=https%3A%2F%2Fbibbase.org%2Fnetwork%2Ffiles%2FqFA7i6ofN7rBJSEkv&noBootstrap=1"); print_r($contents); ?>
	</div>
</section>

<?php
 include_once("footer.php");
?>