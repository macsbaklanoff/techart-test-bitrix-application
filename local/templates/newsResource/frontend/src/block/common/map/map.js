// document.addEventListener('DOMContentLoaded', function () {
// 	let map = null;
// 	let popup = null;

// 	let officeTulaObject = {
// 		name: 'tula',
// 		coordinates: [37.584685, 54.200802],
// 	}
// 	let officeMoscowObject = {
// 		name: 'moscow',
// 		coordinates: [37.630113, 55.679103],
// 	}

// 	let activeOffice = officeTulaObject;
// 	let officeTulaElement = document.getElementById('office-tula');
// 	let officeMoscowElement = document.getElementById('office-moscow');

// 	officeTulaElement.onclick = function () {
// 		activeOffice = officeTulaObject;
// 		officeTulaElement.style.fontFamily = 'OpenSans-SemiBold';
// 		officeMoscowElement.style.fontFamily = 'OpenSans-Regular';
// 		renderMap();
// 	}
// 	officeMoscowElement.onclick = function () {
// 		activeOffice = officeMoscowObject;
// 		officeMoscowElement.style.fontFamily = 'OpenSans-SemiBold';
// 		officeTulaElement.style.fontFamily = 'OpenSans-Regular';
// 		renderMap();
// 	}

// 	function renderMap() {
// 		popup = document.getElementById('my-popup');
// 		popup.style.display = 'none';
// 		map.destroy();
// 		initMap();
// 	}

// 	initMap();

// 	async function initMap() {
// 		// Промис `ymaps3.ready` будет зарезолвлен, когда загрузятся все компоненты основного модуля API
// 		await window.ymaps3.ready;

// 		const { YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer } = window.ymaps3;

// 		const { YMapDefaultMarker } = await window.ymaps3.import('@yandex/ymaps3-markers@0.0.1');
// 		// const {YMapDefaultMarker} = await import('@yandex/ymaps3-default-ui-theme');

// 		map = new YMap(
// 			document.getElementById('map'),
// 			{
// 				location: {
// 					center: activeOffice.coordinates,
// 					zoom: 15
// 				}
// 			}
// 		);

// 		map.addChild(new YMapDefaultSchemeLayer({}));
// 		map.addChild(new YMapDefaultFeaturesLayer({}));

// 		const myPlacemark = new YMapDefaultMarker({
// 			coordinates: activeOffice.coordinates,
// 			title: 'Techart',
// 			subtitle: 'Маркетинговая группа',
// 			color: 'red',
// 			size: 'normal',
// 			onClick: (event) => {
// 				const map = document.getElementById('map');
// 				const popup = document.getElementById('my-popup');
// 				const infoOffice = document.getElementById(`info-office`);
// 				popup.innerHTML = activeOffice.info;

// 				const parentRect = map.getBoundingClientRect();

// 				const relativeX = event.clientX - parentRect.left;
// 				const relativeY = event.clientY - parentRect.top;

// 				popup.style.top = relativeY + 'px';
// 				popup.style.left = relativeX + 'px';

// 				if (popup.style.display == 'none') popup.style.display = 'flex';
// 				else popup.style.display = 'none';
// 			}
// 		});

// 		map.addChild(myPlacemark);
// 	}
// });