<div class="df-bg">
	<div class="container df-container">		
		<div class="df-video">
			<h2>Видеоотзывы (аудиоотзывы)</h2>
			<div class="df-left-video">
				<a href="#"><img src="img/df-play-big.png" alt="" class="img-responsive"></a>
			</div>
			<div class="df-right-audio">
				<div class="df-box1">
					<span>Сергей
						<em> (Audi, июль 2013)</em>
					</span>
					<div class="df-progress">
						<div class="df-img-play">
							<a href="#" class="dfimg"><img src="img/df-play.png" alt="" ></a>
							<a href="#" class="dfimg2"><img src="img/df-pause.png" alt="" ></a>
						</div>						
						<div class="progress-bar">
							<input value="0" type="range" min="0" max="100" class="df-poloska">				
						</div>						
					</div>
				</div>
					<div class="df-box1">
					<span>Сергей
						<em> (Audi, июль 2013)</em>
					</span>
					<div class="df-progress">
						<div class="df-img-play">
							<a href="#" class="dfimg"><img src="img/df-play.png" alt="" ></a>
							<a href="#" class="dfimg2"><img src="img/df-pause.png" alt="" ></a>
						</div>						
						<div class="progress-bar">
							<input value="0" type="range" min="0" max="100" class="df-poloska">					
						</div>						
					</div>
				</div>
				<div class="df-box1">
					<span>Сергей
						<em> (Audi, июль 2013)</em>
					</span>
					<div class="df-progress">
						<div class="df-img-play">
							<a href="#" class="dfimg"><img src="img/df-play.png" alt="" ></a>
							<a href="#" class="dfimg2"><img src="img/df-pause.png" alt="" ></a>
						</div>						
						<div class="progress-bar">
							<input value="0" type="range" min="0" max="100" class="df-poloska">

						</div>						
					</div>
				</div>
					<div class="clear"></div>
			
			</div>
				<div class="df-b">
					<span class="df-button">
						<a href="#log-in" name="modal">Получить консультацию БЕСПЛАТНО</a>
					</span>
				</div>
		</div>
	</div>
</div>
<script>
	
	$('.dfimg').click(function(e){
		e.preventDefault();		
		$('.dfimg2').each(function(){
			if ($(this).css('display') == 'inline-block' ){
				$(this).css("display","none");
				$(this).prev(".dfimg").show();
			}
		});
		$(this).css("display","none");
		$(this).next('.dfimg2').css("display","inline-block");	
	});

	$('.dfimg2').click(function(e){	
		e.preventDefault();			
		$(this).css("display","none");
		$(this).prev('.dfimg').css("display","inline-block");		
	});
</script>
<script>
var slider = document.querySelector('.range');


var testAndWK = window.getComputedStyle(slider,'::-webkit-slider-thumb').height;
if (!testAndWK) {
	slider.style.WebkitAppearance = 'slider-horizontal';
}

slider.addEventListener('input',startTimer,false);
slider.addEventListener('change',startTimer,false);

var timeout;
function startTimer() {
	var that = this;
	clearTimeout(timeout);
	timeout = setTimeout(function () {
		handleEvent(that);
	},100);
}

function handleEvent(slider) {
	
}
</script>