<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<script src="http://catatron.com/angular-ymaps/angular-ymaps.min.js"></script>

<script>
		var myApp = angular.module("myApp", ['ymaps']);
</script>

<div class="dc-bg-2">
	<div class="container">
		<div class="row">
		    <div class="col-md-12">
			    <div class="dc-scenaries" ng-app="myApp">
    			    Место для карты
    			    <div ng-init="coords=[55.21, 34.30];center=[55.21, 34.30];zoom=10">
                        <yandex-map center="center" zoom="zoom">
                            <ymap-marker coordinates="coords"></ymap-marker>
                        </yandex-map>
                    </div>
			    </div>
			</div>
		</div>
	</div>
</div>