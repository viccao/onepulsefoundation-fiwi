<?php
/**
 * The template for displaying the footer
 *
 * @package Smores
 * @since Smores 2.0
 */
?>	

<?php 
			$newsimage = get_field('news_image', 'options');?>

<section class="page-cta mb80 hidden-xs">
	<div class="">
		<div class="row">
			<div class="col-sm-7 p0 mm oh">
				<div class="img-overlay"></div>
				<img src="<?php echo $newsimage['sizes']['banner']; ?>" alt="<?php if (!$image['alt'] == null): echo $image['alt']; else: echo get_the_title() . ' - ' . get_bloginfo(); endif; ?>">
				<?php if (!$newsimage['caption'] == null): echo '<label class="img-attrib">' . $newsimage['caption'] . '</label>'; endif; ?>
				<div class="over">
				<h3>News and Updates</h3>
				</div>
			</div>
			<div class="col-sm-5 p0 mm">
				
					<div class="dupe"><h3></h3></div>

				
				<div class="content">

					<p class="text-right">The onePULSE Foundation is the only official 501(c)(3) incorporated by the owners of Pulse Nightclub. onePULSE Foundation’s initial focused mission is to provide financial assistance to victims affected by the attack at Pulse Nightclub. </p>
					
					<a href="<?php the_permalink(108);?>" class="btn right">See All </a>


				</div>


			</div>
		</div>
	</div>


</section>
<section class="page-cta mobile-cta visible-xs">
	<div class="container">
					<div class="img-overlay"></div>
	
		<div class="row">
			<div class="col-xs-10">
				<div class="content">
				<h2 class="text-white"><span>Contact onePULSE Foundation</span>Fight the War Against Hate</h2>
				</div>
			</div>

		</div>	
		<div class="row">
			<div class="col-xs-12">
				<div class="content">

					<div class="pt64"></div>	
				<a href="#contact-modal" class="btn clipped modal-toggle" title="Together We Can. Contact Us ">Together We Can. Contact Us <i class="fa fa-send"></i></a>
				</div>
			</div>

		</div>
	</div>
	</div>

</section>

<footer>
	<div class="container mb16 hidden-xs">
	<div class="container-fluid">
		<div class="col-sm-2">			
			<a href="/">
			<svg version="1.1" id="onepulse" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="328.424px" height="315.496px" viewBox="0 0 328.424 315.496" enable-background="new 0 0 328.424 315.496"
	 xml:space="preserve">
<g id="logo-main">
	<path d="M92.05,60.59H244.5c18.264,0,34.05,5.972,46.918,17.75c2.32,2.125,4.427,4.342,6.338,6.64
		c1.838-14.144,0-27.909-6.06-40.393C268.354-3.495,191.375-14.391,119.765,20.247C48.152,54.886,9.022,121.944,32.361,170.026
		c10.63,21.895,32.386,36.074,59.689,41.761V60.59z"/>
	<path d="M124.391,183.947v30.618c25.302-0.595,52.981-7.18,79.901-20.201c6.63-3.208,12.983-6.694,19.032-10.417H124.391z"/>
	<path d="M278.781,122.268c0-8.488-3.117-15.295-9.811-21.426c-6.816-6.236-14.82-9.266-24.471-9.266H124.391v61.381h120.107
		c9.657,0,17.661-3.03,24.472-9.266C275.664,137.566,278.781,130.759,278.781,122.268"/>
</g>
<g id="text">
	<g>
		<g>
			<path d="M-0.487,302.809h4.832V287.13h13.115v-4.289H4.344v-9.368h13.115v-4.289H-0.487V302.809z M26.239,273.621
				c-3.402,3.303-5.078,7.445-5.078,12.474c0,4.881,1.676,8.973,5.078,12.227c3.353,3.254,7.593,4.881,12.622,4.881
				c5.325,0,9.713-1.627,13.213-4.881c3.501-3.254,5.226-7.346,5.226-12.326c0-4.93-1.726-9.072-5.177-12.375
				c-3.451-3.303-7.79-4.93-12.967-4.93C33.93,268.691,29.641,270.318,26.239,273.621L26.239,273.621z M48.574,276.924
				c2.514,2.416,3.747,5.423,3.747,8.973c0,3.698-1.233,6.755-3.747,9.171c-2.514,2.465-5.621,3.698-9.368,3.698
				c-3.747,0-6.853-1.183-9.318-3.599c-2.514-2.416-3.747-5.423-3.747-9.072c0-3.747,1.233-6.804,3.698-9.22
				c2.465-2.416,5.67-3.599,9.466-3.599C42.953,273.276,46.059,274.508,48.574,276.924L48.574,276.924z M86.643,288.264
				c0,2.662-0.197,4.536-0.641,5.621c-0.394,1.085-1.085,2.021-2.021,2.86c-1.824,1.479-4.142,2.219-7.001,2.219
				c-2.021,0-3.747-0.394-5.226-1.134c-1.479-0.74-2.564-1.726-3.303-2.958c-0.74-1.233-1.085-3.451-1.085-6.607v-19.081h-4.832
				v19.031c0,2.712,0.197,4.733,0.542,5.966c0.345,1.282,0.838,2.367,1.381,3.254c0.542,0.838,1.233,1.627,2.021,2.367
				c2.662,2.268,6.163,3.402,10.551,3.402c4.289,0,7.79-1.134,10.452-3.451c0.789-0.69,1.479-1.479,2.021-2.317
				c0.542-0.887,1.035-1.972,1.43-3.303c0.345-1.331,0.542-3.254,0.542-5.867v-19.081h-4.832V288.264z M124.859,295.315
				l-22.68-26.131h-3.895v33.625h4.536v-25.885l22.483,25.885h4.142v-33.625h-4.585V295.315z M147.298,302.809
				c3.008,0,5.029-0.099,6.064-0.246c1.085-0.197,2.268-0.493,3.501-0.986c2.169-0.838,4.092-2.071,5.719-3.649
				c1.627-1.578,2.86-3.402,3.747-5.423c0.838-2.071,1.282-4.24,1.282-6.459c0-3.155-0.789-6.064-2.367-8.727
				c-1.578-2.662-3.698-4.684-6.36-6.064c-2.662-1.381-6.311-2.071-10.896-2.071h-11.34v33.625H147.298z M152.574,273.72
				c1.035,0.197,2.12,0.542,3.303,1.085c1.134,0.542,2.169,1.282,3.106,2.12c2.416,2.268,3.648,5.226,3.648,8.825
				c0,3.698-1.183,6.755-3.55,9.171c-0.74,0.74-1.578,1.331-2.465,1.874c-0.887,0.493-2.021,0.887-3.353,1.233
				c-1.331,0.345-3.205,0.493-5.621,0.493h-6.163v-25.046h6.015C149.813,273.473,151.489,273.572,152.574,273.72L152.574,273.72z
				 M169.935,302.809h4.93l4.24-9.959h14.298l4.487,9.959h4.93l-15.087-33.822h-3.353L169.935,302.809z M180.93,288.56l5.128-12.178
				l5.423,12.178H180.93z M203.664,273.473h11.537v29.336h4.832v-29.336h11.734v-4.289h-28.103V273.473z M236.357,302.809h4.832
				v-33.625h-4.832V302.809z M252.235,273.621c-3.402,3.303-5.078,7.445-5.078,12.474c0,4.881,1.676,8.973,5.078,12.227
				c3.353,3.254,7.593,4.881,12.622,4.881c5.325,0,9.713-1.627,13.213-4.881c3.501-3.254,5.226-7.346,5.226-12.326
				c0-4.93-1.726-9.072-5.177-12.375c-3.451-3.303-7.79-4.93-12.967-4.93C259.926,268.691,255.637,270.318,252.235,273.621
				L252.235,273.621z M274.57,276.924c2.515,2.416,3.747,5.423,3.747,8.973c0,3.698-1.233,6.755-3.747,9.171
				c-2.514,2.465-5.621,3.698-9.368,3.698s-6.853-1.183-9.318-3.599c-2.514-2.416-3.747-5.423-3.747-9.072
				c0-3.747,1.233-6.804,3.698-9.22c2.465-2.416,5.67-3.599,9.466-3.599C268.949,273.276,272.055,274.508,274.57,276.924
				L274.57,276.924z M315.942,295.315l-22.68-26.131h-3.895v33.625h4.536v-25.885l22.483,25.885h4.142v-33.625h-4.585V295.315z"/>
			<path d="M288.354,310.005c0.138-0.069,0.394-0.099,0.779-0.099c0.444,0,0.818,0.118,1.124,0.355
				c0.296,0.246,0.444,0.542,0.444,0.897c0,0.345-0.138,0.631-0.414,0.867s-0.611,0.355-1.015,0.355
				c-0.463,0-0.936-0.158-1.419-0.463v0.986c0.513,0.266,1.045,0.394,1.587,0.394c0.66,0,1.203-0.197,1.617-0.591
				c0.414-0.404,0.621-0.917,0.621-1.548c0-0.611-0.207-1.114-0.631-1.518c-0.424-0.394-0.956-0.591-1.607-0.591
				c-0.069,0-0.138,0-0.207,0.01v-1.695h2.109v-0.858h-2.987V310.005z M293.206,307.373c-0.404,0.641-0.611,1.469-0.611,2.494
				c0,1.035,0.197,1.863,0.591,2.494c0.394,0.621,0.917,0.936,1.567,0.936c0.641,0,1.163-0.315,1.567-0.956
				c0.404-0.641,0.601-1.479,0.601-2.494c0-0.996-0.197-1.824-0.601-2.464c-0.404-0.651-0.917-0.976-1.528-0.976
				C294.143,306.407,293.611,306.733,293.206,307.373L293.206,307.373z M295.641,308.014c0.207,0.463,0.306,1.084,0.306,1.873
				c0,0.779-0.108,1.39-0.325,1.843c-0.207,0.453-0.503,0.68-0.877,0.68c-0.375,0-0.66-0.227-0.877-0.68
				c-0.207-0.453-0.315-1.074-0.315-1.873c0-0.779,0.108-1.4,0.325-1.853s0.513-0.68,0.877-0.68h0.049
				C295.148,307.324,295.434,307.551,295.641,308.014L295.641,308.014z M299.212,313.229h0.966v-6.723h-0.966V313.229z
				 M303.197,308.763c-0.276,0.71-0.414,1.439-0.414,2.198c0,0.749,0.138,1.479,0.414,2.188c0.177,0.444,0.355,0.808,0.522,1.094
				c0.177,0.276,0.444,0.641,0.808,1.074l0.148,0.177h0.542c-0.946-1.252-1.419-2.75-1.419-4.505c0-0.513,0.049-1.045,0.138-1.587
				c0.089-0.552,0.227-1.035,0.404-1.459c0.187-0.424,0.473-0.936,0.877-1.538h-0.542
				C303.976,307.275,303.483,308.054,303.197,308.763L303.197,308.763z M308.117,312.489c-0.463,0-0.838-0.138-1.114-0.404
				s-0.414-0.621-0.414-1.084c0-0.424,0.128-0.779,0.384-1.065c0.256-0.276,0.582-0.414,0.986-0.414
				c0.375,0,0.798,0.138,1.242,0.424v-0.936c-0.266-0.118-0.493-0.197-0.68-0.237c-0.177-0.049-0.384-0.069-0.611-0.069
				c-0.66,0-1.193,0.217-1.597,0.641c-0.404,0.434-0.611,0.996-0.611,1.686c0,0.7,0.207,1.252,0.621,1.656
				c0.414,0.414,0.976,0.621,1.666,0.621c0.424,0,0.858-0.079,1.301-0.246v-0.867C308.847,312.391,308.462,312.489,308.117,312.489
				L308.117,312.489z M311.353,314.047c0.197-0.325,0.355-0.66,0.473-0.996c0.256-0.67,0.384-1.37,0.384-2.1
				c0-0.759-0.138-1.498-0.424-2.208c-0.168-0.453-0.345-0.818-0.522-1.094c-0.168-0.286-0.444-0.631-0.798-1.065l-0.148-0.177
				h-0.542c0.345,0.463,0.611,0.936,0.818,1.41c0.197,0.463,0.345,0.966,0.453,1.488c0.099,0.522,0.148,1.065,0.148,1.626
				c0,0.483-0.039,0.986-0.128,1.508c-0.089,0.532-0.217,1.015-0.394,1.449c-0.177,0.444-0.483,0.976-0.897,1.607h0.542
				C310.82,314.865,311.165,314.382,311.353,314.047L311.353,314.047z M313.888,308.763c-0.276,0.71-0.414,1.439-0.414,2.198
				c0,0.749,0.138,1.479,0.414,2.188c0.177,0.444,0.355,0.808,0.522,1.094c0.177,0.276,0.444,0.641,0.808,1.074l0.148,0.177h0.542
				c-0.946-1.252-1.419-2.75-1.419-4.505c0-0.513,0.049-1.045,0.138-1.587c0.089-0.552,0.227-1.035,0.404-1.459
				c0.187-0.424,0.473-0.936,0.877-1.538h-0.542C314.666,307.275,314.174,308.054,313.888,308.763L313.888,308.763z
				 M317.803,310.202l0.089,0.01c0.384,0.049,0.641,0.099,0.759,0.148c0.118,0.059,0.217,0.138,0.315,0.246
				c0.168,0.207,0.246,0.434,0.246,0.7c0,0.315-0.099,0.572-0.296,0.769c-0.197,0.187-0.453,0.286-0.779,0.286
				c-0.483,0-0.976-0.158-1.479-0.473v1.045c0.473,0.246,0.966,0.375,1.479,0.375c0.601,0,1.094-0.187,1.479-0.572
				c0.394-0.384,0.591-0.867,0.591-1.459c0-0.237-0.03-0.463-0.099-0.67c-0.069-0.217-0.168-0.394-0.286-0.542
				c-0.128-0.148-0.315-0.276-0.582-0.384c0.306-0.158,0.522-0.365,0.66-0.591c0.138-0.237,0.207-0.522,0.207-0.867
				c0-0.562-0.177-1.005-0.532-1.331c-0.365-0.325-0.848-0.483-1.469-0.483c-0.463,0-0.887,0.099-1.281,0.296v0.917
				c0.424-0.217,0.818-0.325,1.163-0.325s0.631,0.089,0.848,0.276c0.207,0.187,0.315,0.434,0.315,0.729
				c0,0.335-0.108,0.582-0.335,0.759c-0.217,0.168-0.532,0.256-0.956,0.256h-0.059V310.202z M322.655,314.047
				c0.197-0.325,0.355-0.66,0.473-0.996c0.256-0.67,0.384-1.37,0.384-2.1c0-0.759-0.138-1.498-0.424-2.208
				c-0.168-0.453-0.345-0.818-0.522-1.094c-0.168-0.286-0.444-0.631-0.798-1.065l-0.148-0.177h-0.542
				c0.345,0.463,0.611,0.936,0.818,1.41c0.197,0.463,0.345,0.966,0.453,1.488c0.099,0.522,0.148,1.065,0.148,1.626
				c0,0.483-0.039,0.986-0.128,1.508c-0.089,0.532-0.217,1.015-0.394,1.449c-0.177,0.444-0.483,0.976-0.897,1.607h0.542
				C322.123,314.865,322.468,314.382,322.655,314.047L322.655,314.047z"/>
		</g>
		<g>
			<g>
				<path d="M119.427,245.295H92.526v-13.994h26.901c1.944,0,3.563,0.672,4.948,2.055c1.386,1.383,2.06,2.999,2.06,4.942
					c0,1.942-0.674,3.558-2.06,4.942C122.991,244.622,121.372,245.295,119.427,245.295 M119.427,225.437H86.652v32.72
					c0,1.781,1.153,2.934,2.938,2.934c1.785,0,2.937-1.153,2.937-2.934v-6.997h26.901c3.56,0,6.631-1.272,9.128-3.781
					c2.492-2.506,3.755-5.561,3.755-9.08c0-3.553-1.265-6.618-3.76-9.109C126.056,226.699,122.985,225.437,119.427,225.437"/>
				<path d="M176.135,225.734c-1.768,0-2.909,1.152-2.909,2.933v19.263c0,3.21-1.959,5.461-5.984,6.884
					c-2.84,0.999-6.407,1.503-10.6,1.503c-4.194,0-7.759-0.504-10.596-1.5c-4.03-1.425-5.989-3.676-5.989-6.886v-19.263
					c0-1.781-1.142-2.933-2.909-2.933c-1.767,0-2.909,1.152-2.909,2.933v19.263c0,5.268,2.696,9.179,8.01,11.627
					c3.761,1.742,8.604,2.626,14.394,2.626c5.821,0,10.681-0.884,14.444-2.626c5.28-2.45,7.959-6.361,7.959-11.627v-19.263
					C179.044,226.885,177.903,225.734,176.135,225.734"/>
				<path d="M224.43,255.522h-36.079v-26.857c0-1.781-1.142-2.933-2.909-2.933c-1.768,0-2.909,1.151-2.909,2.933v32.672h41.898
					c1.769,0,2.909-1.133,2.909-2.884C227.339,256.674,226.199,255.522,224.43,255.522"/>
				<path d="M235.98,232.068c3.276-1.069,7.598-1.611,12.848-1.611c4.735,0,8.876,0.879,12.305,2.614
					c3.083,1.562,4.648,3.321,4.648,5.227c0,1.781,1.153,2.933,2.938,2.933s2.938-1.151,2.938-2.933
					c0-3.987-2.337-7.336-6.947-9.956c-4.328-2.454-9.673-3.7-15.881-3.7c-6.08,0-11.136,0.679-15.028,2.021
					c-5.177,1.786-7.802,4.582-7.802,8.309c0,2.648,1.223,6.239,7.058,8.309c2.025,0.698,6.28,1.531,13.009,2.549l4.891,0.699
					c5.94,0.81,9.904,1.555,11.793,2.214c3.033,1.034,3.033,2.372,3.033,2.81c0,0.994-1.497,2.051-4.106,2.904
					c-3.277,1.069-7.599,1.61-12.846,1.61c-4.74,0-8.881-0.879-12.308-2.614c-3.083-1.558-4.648-3.318-4.648-5.226
					c0-1.781-1.153-2.933-2.937-2.933c-1.785,0-2.938,1.151-2.938,2.933c0,3.988,2.337,7.338,6.948,9.952
					c4.326,2.458,9.669,3.703,15.882,3.703c6.075,0,11.13-0.68,15.024-2.022c5.178-1.786,7.804-4.581,7.804-8.309
					c0-2.647-1.179-6.224-6.787-8.251c-2.313-0.838-6.598-1.677-13.091-2.56l-4.92-0.693c-5.878-0.844-9.8-1.588-11.656-2.218
					c-2.209-0.751-3.33-1.714-3.33-2.859C231.872,233.979,233.369,232.921,235.98,232.068"/>
				<path d="M317.354,246.195c1.785,0,2.938-1.151,2.938-2.932c0-1.78-1.153-2.933-2.938-2.933h-36.846v-9.029h36.846
					c1.785,0,2.938-1.151,2.938-2.933c0-1.781-1.153-2.932-2.938-2.932h-42.72v35.653h42.72c1.785,0,2.938-1.151,2.938-2.933
					c0-1.78-1.153-2.933-2.938-2.933h-36.846v-9.029H317.354z"/>
			</g>
			<g>
				<path d="M32.176,260.797c1.084,0,1.783-0.695,1.783-1.772v-11.645c0-1.939,1.201-3.3,3.669-4.161
					c1.741-0.605,3.925-0.909,6.496-0.909c2.57,0,4.755,0.303,6.494,0.907c2.469,0.862,3.67,2.223,3.67,4.162v11.645
					c0,1.076,0.699,1.772,1.783,1.772s1.783-0.695,1.783-1.772v-11.645c0-3.184-1.652-5.549-4.908-7.027
					c-2.305-1.055-5.273-1.588-8.822-1.588c-3.568,0-6.546,0.533-8.852,1.588c-3.237,1.479-4.878,3.844-4.878,7.027v11.645
					C30.394,260.102,31.093,260.797,32.176,260.797"/>
				<path d="M82.943,252.157c0.978,0,1.609-0.632,1.609-1.613c0-0.979-0.631-1.612-1.609-1.612H62.767v-4.966h20.176
					c0.978,0,1.609-0.634,1.609-1.614c0-0.98-0.631-1.612-1.609-1.612H59.552v19.609h23.391c0.978,0,1.609-0.634,1.609-1.614
					c0-0.979-0.631-1.613-1.609-1.613H62.767v-4.966H82.943z"/>
				<path d="M24.844,241.382c-0.421-0.29-0.866-0.565-1.359-0.812c-2.389-1.197-5.474-1.804-9.17-1.804
					c-3.676,0-6.751,0.607-9.139,1.804c-0.504,0.251-0.959,0.532-1.389,0.829c-2.445,1.683-3.695,4.079-3.695,7.155v3.586
					c0,2.769,1.25,4.925,3.695,6.44c0.43,0.267,0.885,0.52,1.389,0.746c2.388,1.077,5.463,1.624,9.139,1.624
					c3.696,0,6.78-0.546,9.17-1.624c0.492-0.222,0.938-0.47,1.359-0.731c2.445-1.517,3.694-3.678,3.694-6.455v-3.586
					C28.537,245.468,27.289,243.067,24.844,241.382z M24.844,252.139c0,1.984-1.244,3.375-3.8,4.256
					c-1.802,0.616-4.067,0.928-6.729,0.928c-2.663,0-4.926-0.312-6.727-0.927c-2.558-0.881-3.801-2.273-3.801-4.257v-3.586
					c0-2.204,1.243-3.75,3.801-4.729c1.801-0.684,4.065-1.031,6.727-1.031c2.662,0,4.926,0.347,6.729,1.032
					c2.556,0.978,3.8,2.524,3.8,4.728V252.139z"/>
			</g>
		</g>
	</g>
	<g>
		<path d="M325.704,274.627c-1.52,0-2.703-1.22-2.703-2.704c0-1.483,1.198-2.719,2.719-2.719c1.52,0,2.704,1.221,2.704,2.704
			C328.424,273.391,327.225,274.627,325.704,274.627z M325.719,269.474c-1.386,0-2.434,1.101-2.434,2.449
			c0,1.348,1.041,2.434,2.419,2.434c1.386,0,2.435-1.101,2.435-2.449C328.139,270.56,327.098,269.474,325.719,269.474z
			 M326.319,272.185l0.764,1.071h-0.644l-0.689-0.981h-0.592v0.981h-0.539v-2.839h1.265c0.659,0,1.093,0.337,1.093,0.906
			C326.978,271.788,326.708,272.073,326.319,272.185z M325.862,270.905h-0.704v0.898h0.704c0.352,0,0.562-0.172,0.562-0.449
			C326.423,271.062,326.214,270.905,325.862,270.905z"/>
	</g>
</g>
</svg>
			
			</a>
		</div>
		<div class="col-sm-9 col-offset-sm-1 text-right hidden-xs"><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></div>
		</div>
	
	</div>
<div class="copy">
	<div class="container">
		<div class="row">

		<div class="col-md-4 col-md-offset-8">
		
			<ul class="socials">
				<li><a href="http://www.facebook.com/onepulseorg" class="pop-link"><i class="fa fa-facebook"></i></a></li>
				<li><a href="http://www.twitter.com/onepulseorg" class="pop-link"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.instagram.com/onepulseorg/" class="pop-link"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
			</div>
		<div class="row">
		<div class="col-md-8">
			<p>&copy; <?php echo date("Y"); ?> onePULSE Foundation • PO Box 530036
Orlando Fl 32853-0036</div>
		<div class="col-md-4">
		<a href="https://findsomewinmore.com" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/FIWI-classic-website-by-white.svg" class="fiwi"></a>
		</div>
			</div>

	</div>
	
	</div>
</footer>


</div>
<div class="donate-bar visible-xs"><a href="/donate">Donate to onePULSE <i class="fa fa-chevron-right"></i></a></div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/vendor/videojs.ga.min.js"></script>
<script>
				if ($('#featured-image').length) {





					// try to create a WebGL canvas (will fail if WebGL isn't supported)


					// convert the image to a texture

//					var image = document.getElementById('featured-image');
//
//					
//					window.onload = function () {
//
//						var canvas = fx.canvas();
//
//						var texture = canvas.texture(image);
//						// apply the ink filter
//						canvas.draw(texture).colorHalftone(320, 239.5, 0.25, 4).update();
//
//						// replace the image with the canvas
//						image.parentNode.insertBefore(canvas, image);
//						image.parentNode.removeChild(image);
//
//						// Note: instead of swapping the &lt;canvas&gt; tag with the &lt;img&gt; tag
//						// as done above, we could have just transferred the contents of
//						// the image directly:
//						//
//						//     image.src = canvas.toDataURL('image/png');
//						//
//						// This has two disadvantages. First, it is much slower, so it
//						// would be a bad idea to do this repeatedly. If you are going
//						// to be repeatedly updating a filter it's much better to use
//						// the &lt;canvas&gt; tag directly. Second, this requires that the
//						// image is hosted on the same domain as the script because
//						// JavaScript has direct access to the image contents. When the
//						// two tags were swapped using the previous method, JavaScript
//						// actually doesn't have access to the image contents and this
//						// does not violate the same origin policy.
//					};
//					image.crossOrigin = 'anonymous';
//					image.src = $('#featured-image').attr('src');

				}
</script>
  </body>
</html>
