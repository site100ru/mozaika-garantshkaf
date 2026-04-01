//function carousel1() {
	/*
	let id = elemId;
	let imagesArray = [];
	
	for (let image of images) {
		imagesArray.push(image);
	}
	*/
	
	imagesArray1 = [
		"prihozhaya-1.jpg",
		"prihozhaya-2.jpg",
		"prihozhaya-3.jpg",
		"prihozhaya-4.jpg",
		"prihozhaya-5.jpg",
		"prihozhaya-6.jpg",
	];
	
	/*
	// Подбираем количество картинок в слайде исходя из размера экрана
	window.onload = function() {
		if ( window.innerWidth <= 750 ) {
			// Выводим картинки по одной за раз.
			imagesArray1.forEach(outPutImagesArrayToOne1); // Делаем что-то с каждым элеменом массива портфолио.
		} else {
			// Выводим картинки по три за раз.
			imagesArray1.forEach(outPutImagesArrayToThree1); // Делаем что-то с каждым элеменом массива портфолио.
		}
	} */
	
	/*
	// Подбираем количество картинок в слайде при смене размера экрана
	window.onresize = function() {
		if ( window.innerWidth <= 750 ) {
			// Удаляем текущее количество картинок в слайде
			document.getElementById("carouselInnerOne").innerHTML = '';
			// Выводим картинки по одной за раз.
			imagesArray1.forEach(outPutImagesArrayToOne1); // Делаем что-то с каждым элеменом массива портфолио.
		} else {
			// Удаляем текущее количество картинок в слайде
			document.getElementById("carouselInnerOne").innerHTML = '';
			// Выводим картинки по три за раз.
			imagesArray1.forEach(outPutImagesArrayToThree1); // Делаем что-то с каждым элеменом массива портфолио.
		}
	} */
	
	// Выводим картинки по одной за раз.
	function outPutImagesArrayToOne1(item, index, array) { // Элемент, индекс, массив.
		if ( index == 0 ) {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let carouselInner = document.getElementById("carouselInnerOne"); // Определяем куда нужно выводить созданный див.
			
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		} else {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let carouselInner = document.getElementById("carouselInnerOne"); // Определяем куда нужно выводить созданный див.
			
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		}
	}
	
	// Выводим картинки по три за раз.
	function outPutImagesArrayToThree1(item, index, array) { // Элемент, индекс, массив.
		if ( index == 0 ) {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			row.id = "carouselItem"+index;
			rowId = row.id;
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let carouselInner = document.getElementById("carouselInnerOne"); // Определяем куда нужно выводить созданный див.
			
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		} else if ( index % 3 != 0 ) {
			let col = document.createElement('div'); // Создаем див.
			col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
			
			//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			//carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		} else if ( index % 3 == 0 ) {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			row.id = "carouselItem"+index;
			rowId = row.id;
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let carouselInner = document.getElementById("carouselInnerOne"); // Определяем куда нужно выводить созданный див.
			
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		}
	}
//}

//function carousel2() {
	/*
	let id = elemId;
	let imagesArray2 = [];
	
	for (let image of images) {
		imagesArray2.push(image);
	}
	*/
	
	imagesArray2 = [		
		"gostinaya-1.jpg",
		"gostinaya-2.jpg",
		"gostinaya-3.jpg",
		"gostinaya-4.jpg",
		"gostinaya-5.jpg",
		"gostinaya-6.jpg",
	];
	
	/*
	// Подбираем количество картинок в слайде исходя из размера экрана
	window.onload = function() {
		if ( window.innerWidth <= 750 ) {
			// Выводим картинки по одной за раз.
			imagesArray1.forEach(outPutImagesArrayToOne2); // Делаем что-то с каждым элеменом массива портфолио.
		} else {
			// Выводим картинки по три за раз.
			imagesArray1.forEach(outPutImagesArrayToThree2); // Делаем что-то с каждым элеменом массива портфолио.
		}
	} */
	
	/*
	// Подбираем количество картинок в слайде при смене размера экрана
	window.onresize = function() {
		if ( window.innerWidth <= 750 ) {
			// Удаляем текущее количество картинок в слайде
			document.getElementById("carouselInnerTwo").innerHTML = '';
			// Выводим картинки по одной за раз.
			imagesArray1.forEach(outPutImagesArrayToOne2); // Делаем что-то с каждым элеменом массива портфолио.
		} else {
			// Удаляем текущее количество картинок в слайде
			document.getElementById("carouselInnerTwo").innerHTML = '';
			// Выводим картинки по три за раз.
			imagesArray1.forEach(outPutImagesArrayToThree2); // Делаем что-то с каждым элеменом массива портфолио.
		}
	} */
	
	// Выводим картинки по одной за раз.
	function outPutImagesArrayToOne2(item, index, array) { // Элемент, индекс, массив.
		if ( index == 0 ) {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let carouselInner = document.getElementById("carouselInnerTwo"); // Определяем куда нужно выводить созданный див.
			
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		} else {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let carouselInner = document.getElementById("carouselInnerTwo"); // Определяем куда нужно выводить созданный див.
			
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		}
	}
	
	// Выводим картинки по три за раз.
	function outPutImagesArrayToThree2(item, index, array) { // Элемент, индекс, массив.
		if ( index == 0 ) {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			row.id = "carouselItem"+index;
			rowId = row.id;
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let carouselInner = document.getElementById("carouselInnerTwo"); // Определяем куда нужно выводить созданный див.
			
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		} else if ( index % 3 != 0 ) {
			let col = document.createElement('div'); // Создаем див.
			col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
			
			//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			//carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		} else if ( index % 3 == 0 ) {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			row.id = "carouselItem"+index;
			rowId = row.id;
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
			col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let carouselInner = document.getElementById("carouselInnerTwo"); // Определяем куда нужно выводить созданный див.
			
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
		}
	}
//}

imagesArray3 = [
	"garderob-1.jpg",
	"garderob-2.jpg",
	"garderob-3.jpg",
	"garderob-4.jpg",
	"garderob-5.jpg",
	"garderob-6.jpg",
];

// Выводим картинки по одной за раз.
function outPutImagesArrayToOne3(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerThree"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerThree"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

// Выводим картинки по три за раз.
function outPutImagesArrayToThree3(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerThree"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 != 0 ) {
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
		
		//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		//carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerThree"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

imagesArray4 = [
	"vstroennyj-1.jpg",
	"vstroennyj-2.jpg",
	"vstroennyj-3.jpg",
	"vstroennyj-4.jpg",
	"vstroennyj-5.jpg",
	"vstroennyj-6.jpg",
];

// Выводим картинки по одной за раз.
function outPutImagesArrayToOne4(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerFour"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerFour"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

// Выводим картинки по три за раз.
function outPutImagesArrayToThree4(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerFour"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 != 0 ) {
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
		
		//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		//carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerFour"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

imagesArray5 = [
	"min-1.jpg",
	"v-spalnu-2.jpg",
	"v-spalnu-3.jpg",
	"v-spalnu-4.jpg",
	"v-spalnu-5.jpg",
	"v-spalnu-1.jpg",
];

// Выводим картинки по одной за раз.
function outPutImagesArrayToOne5(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerFive"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerFive"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

// Выводим картинки по три за раз.
function outPutImagesArrayToThree5(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerFive"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 != 0 ) {
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
		
		//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		//carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerFive"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

imagesArray6 = [
	"uglovye-1.jpg",
	"uglovye-2.jpg",
	"uglovye-3.jpg",
	"uglovye-4.jpg",
	"uglovye-5.jpg",
	"uglovye-6.jpg",
];

// Выводим картинки по одной за раз.
function outPutImagesArrayToOne6(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerSix"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerSix"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

// Выводим картинки по три за раз.
function outPutImagesArrayToThree6(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerSix"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 != 0 ) {
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
		
		//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		//carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerSix"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

imagesArray7 = [
	"zerkalo-1.jpg",
	"zerkalo-2.jpg",
	"zerkalo-3.jpg",
	"zerkalo-4.jpg",
	"zerkalo-5.jpg",
	"zerkalo-6.jpg",
];

// Выводим картинки по одной за раз.
function outPutImagesArrayToOne7(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerSeven"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerSeven"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

// Выводим картинки по три за раз.
function outPutImagesArrayToThree7(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerSeven"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 != 0 ) {
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
		
		//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		//carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerSeven"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

imagesArray8 = [
	"korpus-1.jpg",
	"korpus-2.jpg",
	"korpus-3.jpg",
	"korpus-4.jpg",
	"korpus-5.jpg",
	"korpus-6.jpg",
];

// Выводим картинки по одной за раз.
function outPutImagesArrayToOne8(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerEight"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerEight"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

// Выводим картинки по три за раз.
function outPutImagesArrayToThree8(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerEight"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 != 0 ) {
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
		
		//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		//carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerEight"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}

/*
imagesArray9 = [
	testimonials1 = [ "ava-1.png", "Ольга Афанасьева", "В наше время шкаф-купе - это один из самых главных предметов мебели в доме и очень хочется, чтобы он был вместительным, функциональным, красивым и недорогим. Я долго искала вариант, который бы меня устроил, среди готовых не встроенных шкафов, но получалось слишком дорого. Почему-то я была уверена, что встроенный будет стоить еще дороже, оказалось, что наоборот. На тот момент в проекте был только шкаф, в отношении остальной мебели не было даже наметок по цвету и дизайну, именно по этой причине делали шкаф 2-цветным, что в будущем позволит подобрать мебель уже 2-х цветов. Уже после установки поняли, что 1-цветный вариант смотрелся бы очень громоздко, т.к. ширина шкафов 60 см и размер угла 240*260 см (комната 16 кв. м)." ],
];

//imagesArray9.forEach(fun10);

//function fun10() {
	// Выводим картинки по одной за раз.
	function outPutImagesArrayToOne9(item, index, array) { // Элемент, индекс, массив.
		if ( index == 0 ) {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col-12 col-md-4"; // Добавляем классы создаваемому диву.
			
			let wrapReview = document.createElement('div'); // Создаем див.
			wrapReview.className = "wrap-review"; // Добавляем классы создаваемому диву.
			
			let row2 = document.createElement('div'); // Создаем див.
			row2.className = "row"; // Добавляем классы создаваемому диву.
			
			let review = document.createElement('div'); // Создаем див.
			review.className = "review"; // Добавляем классы создаваемому диву.
			
			let row3 = document.createElement('div'); // Создаем див.
			row3.className = "row"; // Добавляем классы создаваемому диву.
			
			let col2 = document.createElement('div'); // Создаем див.
			col2.className = "col-5 text-center"; // Добавляем классы создаваемому диву.
			col2.innerHTML = '<img src="img/'+item[0]+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let col3 = document.createElement('div'); // Создаем див.
			col3.className = "col-5"; // Добавляем классы создаваемому диву.
			col3.innerHTML = '<h3>'+item[1]+'</h3>'; // Записываем внутрь дива.
			
			let col4 = document.createElement('div'); // Создаем див.
			col4.className = "col-5"; // Добавляем классы создаваемому диву.
			col4.innerHTML = '<p>'+item[2]+'</p>'; // Записываем внутрь дива.
			
			
			let carouselInner = document.getElementById("carouselInnerNine"); // Определяем куда нужно выводить созданный див.
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
			col.append(wrapReview); // Выводим див в конце другого дива.
			wrapReview.append(row2); // Выводим див в конце другого дива.
			row2.append(review); // Выводим див в конце другого дива.
			review.append(row3); // Выводим див в конце другого дива.
			row3.append(col2); // Выводим див в конце другого дива.
			row3.append(col3); // Выводим див в конце другого дива.
			row3.append(col4); // Выводим див в конце другого дива.
		} else {
			let carouselItem = document.createElement('div'); // Создаем див.
			carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
			
			let row = document.createElement('div'); // Создаем див.
			row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
			
			let col = document.createElement('div'); // Создаем див.
			col.className = "col-12 col-md-4"; // Добавляем классы создаваемому диву.
			
			let wrapReview = document.createElement('div'); // Создаем див.
			wrapReview.className = "wrap-review"; // Добавляем классы создаваемому диву.
			
			let row2 = document.createElement('div'); // Создаем див.
			row2.className = "row"; // Добавляем классы создаваемому диву.
			
			let review = document.createElement('div'); // Создаем див.
			review.className = "review"; // Добавляем классы создаваемому диву.
			
			let row3 = document.createElement('div'); // Создаем див.
			row3.className = "row"; // Добавляем классы создаваемому диву.
			
			let col2 = document.createElement('div'); // Создаем див.
			col2.className = "col-5 text-center"; // Добавляем классы создаваемому диву.
			col2.innerHTML = '<img src="img/'+item[0]+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
			
			let col3 = document.createElement('div'); // Создаем див.
			col3.className = "col-5"; // Добавляем классы создаваемому диву.
			col3.innerHTML = '<h3>'+item[1]+'</h3>'; // Записываем внутрь дива.
			
			let col4 = document.createElement('div'); // Создаем див.
			col4.className = "col-5"; // Добавляем классы создаваемому диву.
			col4.innerHTML = '<p>'+item[2]+'</p>'; // Записываем внутрь дива.
			
			
			let carouselInner = document.getElementById("carouselInnerNine"); // Определяем куда нужно выводить созданный див.
			carouselInner.append(carouselItem); // Выводим див в конце другого дива.
			carouselItem.append(row); // Выводим див в конце другого дива.
			row.append(col); // Выводим див в конце другого дива.
			col.append(wrapReview); // Выводим див в конце другого дива.
			wrapReview.append(row2); // Выводим див в конце другого дива.
			row2.append(review); // Выводим див в конце другого дива.
			review.append(row3); // Выводим див в конце другого дива.
			row3.append(col2); // Выводим див в конце другого дива.
			row3.append(col3); // Выводим див в конце другого дива.
			row3.append(col4); // Выводим див в конце другого дива.
		}
	}
//}

/*
// Выводим картинки по три за раз.
function outPutImagesArrayToThree8(item, index, array) { // Элемент, индекс, массив.
	if ( index == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerEight"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 != 0 ) {
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
		
		//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		//carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	} else if ( index % 3 == 0 ) {
		let carouselItem = document.createElement('div'); // Создаем див.
		carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
		
		let row = document.createElement('div'); // Создаем див.
		row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
		row.id = "carouselItem"+index;
		rowId = row.id;
		
		let col = document.createElement('div'); // Создаем див.
		col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
		col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
		
		let carouselInner = document.getElementById("carouselInnerEight"); // Определяем куда нужно выводить созданный див.
		
		carouselInner.append(carouselItem); // Выводим див в конце другого дива.
		carouselItem.append(row); // Выводим див в конце другого дива.
		row.append(col); // Выводим див в конце другого дива.
	}
}
*/

// Подбираем количество картинок в слайде исходя из размера экрана
window.onload = function() {
	if ( window.innerWidth <= 750 ) {
		// Выводим картинки по одной за раз.
		//imagesArray9.forEach(outPutImagesArrayToOne9); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray8.forEach(outPutImagesArrayToOne8); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray7.forEach(outPutImagesArrayToOne7); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray6.forEach(outPutImagesArrayToOne6); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray5.forEach(outPutImagesArrayToOne5); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray4.forEach(outPutImagesArrayToOne4); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray3.forEach(outPutImagesArrayToOne3); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray2.forEach(outPutImagesArrayToOne2); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray1.forEach(outPutImagesArrayToOne1); // Делаем что-то с каждым элеменом массива портфолио.
	} else {
		// Выводим картинки по три за раз.
		//imagesArray9.forEach(outPutImagesArrayToThree9); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray8.forEach(outPutImagesArrayToThree8); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray7.forEach(outPutImagesArrayToThree7); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray6.forEach(outPutImagesArrayToThree6); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray5.forEach(outPutImagesArrayToThree5); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray4.forEach(outPutImagesArrayToThree4); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray3.forEach(outPutImagesArrayToThree3); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray2.forEach(outPutImagesArrayToThree2); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray1.forEach(outPutImagesArrayToThree1); // Делаем что-то с каждым элеменом массива портфолио.
	}
}
	
// Подбираем количество картинок в слайде при смене размера экрана
window.onresize = function() {
	if ( window.innerWidth <= 750 ) {
		// Удаляем текущее количество картинок в слайде
		//document.getElementById("carouselInnerNine").innerHTML = '';
		document.getElementById("carouselInnerEight").innerHTML = '';
		document.getElementById("carouselInnerSeven").innerHTML = '';
		document.getElementById("carouselInnerSix").innerHTML = '';
		document.getElementById("carouselInnerFive").innerHTML = '';
		document.getElementById("carouselInnerFour").innerHTML = '';
		document.getElementById("carouselInnerThree").innerHTML = '';
		document.getElementById("carouselInnerTwo").innerHTML = '';
		document.getElementById("carouselInnerOne").innerHTML = '';
		// Выводим картинки по одной за раз.
		//imagesArray9.forEach(outPutImagesArrayToOne9); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray8.forEach(outPutImagesArrayToOne8); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray7.forEach(outPutImagesArrayToOne7); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray6.forEach(outPutImagesArrayToOne6); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray5.forEach(outPutImagesArrayToOne5); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray4.forEach(outPutImagesArrayToOne5); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray3.forEach(outPutImagesArrayToOne4); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray2.forEach(outPutImagesArrayToOne2); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray1.forEach(outPutImagesArrayToOne1); // Делаем что-то с каждым элеменом массива портфолио.
	} else {
		// Удаляем текущее количество картинок в слайде
		//document.getElementById("carouselInnerNine").innerHTML = '';
		document.getElementById("carouselInnerEight").innerHTML = '';
		document.getElementById("carouselInnerSeven").innerHTML = '';
		document.getElementById("carouselInnerSix").innerHTML = '';
		document.getElementById("carouselInnerFive").innerHTML = '';
		document.getElementById("carouselInnerFour").innerHTML = '';
		document.getElementById("carouselInnerThree").innerHTML = '';
		document.getElementById("carouselInnerTwo").innerHTML = '';
		document.getElementById("carouselInnerOne").innerHTML = '';
		// Выводим картинки по три за раз.
		//imagesArray9.forEach(outPutImagesArrayToThree9); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray8.forEach(outPutImagesArrayToThree8); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray7.forEach(outPutImagesArrayToThree7); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray6.forEach(outPutImagesArrayToThree6); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray5.forEach(outPutImagesArrayToThree5); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray4.forEach(outPutImagesArrayToThree4); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray3.forEach(outPutImagesArrayToThree3); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray2.forEach(outPutImagesArrayToThree2); // Делаем что-то с каждым элеменом массива портфолио.
		imagesArray1.forEach(outPutImagesArrayToThree1); // Делаем что-то с каждым элеменом массива портфолио.
	}
}


			

				
				/*
				// Выводим картинки по одной за раз.
				function outPutImagesArrayToOne(item, index, array) { // Элемент, индекс, массив.
					if ( index == 0 ) {
						let carouselItem = document.createElement('div'); // Создаем див.
						carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
						
						let row = document.createElement('div'); // Создаем див.
						row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
						
						let col = document.createElement('div'); // Создаем див.
						col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let carouselInner = document.getElementById("carouselInnerTwo"); // Определяем куда нужно выводить созданный див.
						
						carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					} else {
						let carouselItem = document.createElement('div'); // Создаем див.
						carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
						
						let row = document.createElement('div'); // Создаем див.
						row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
						
						let col = document.createElement('div'); // Создаем див.
						col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let carouselInner = document.getElementById("carouselInnerTwo"); // Определяем куда нужно выводить созданный див.
						
						carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					}
				}
				
				// Выводим картинки по три за раз.
				function outPutImagesArrayToThree(item, index, array) { // Элемент, индекс, массив.
					if ( index == 0 ) {
						let carouselItem = document.createElement('div'); // Создаем див.
						carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
						
						let row = document.createElement('div'); // Создаем див.
						row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
						row.id = "carouselItem"+index;
						rowId = row.id;
						
						let col = document.createElement('div'); // Создаем див.
						col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let carouselInner = document.getElementById("carouselInnerTwo"); // Определяем куда нужно выводить созданный див.
						
						carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					} else if ( index % 3 != 0 ) {
						let col = document.createElement('div'); // Создаем див.
						col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
						
						//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						//carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					} else if ( index % 3 == 0 ) {
						let carouselItem = document.createElement('div'); // Создаем див.
						carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
						
						let row = document.createElement('div'); // Создаем див.
						row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
						row.id = "carouselItem"+index;
						rowId = row.id;
						
						let col = document.createElement('div'); // Создаем див.
						col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let carouselInner = document.getElementById("carouselInnerTwo"); // Определяем куда нужно выводить созданный див.
						
						carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					}
				}
			
			
			function carousel( elemId, ...images ) {
				let imagesArray = [];
				let id = elemId;
				
				for (let image of images) {
					imagesArray.push(image);
				}
				
				/*
				// Подбираем количество картинок в слайде исходя из размера экрана
				window.onload = function() {
					if ( window.innerWidth <= 750 ) {
						// Выводим картинки по одной за раз.
						imagesArray.forEach(outPutImagesArrayToOne); // Делаем что-то с каждым элеменом массива портфолио.
					} else {
						// Выводим картинки по три за раз.
						imagesArray.forEach(outPutImagesArrayToThree); // Делаем что-то с каждым элеменом массива портфолио.
					}
				}
				
				// Подбираем количество картинок в слайде при смене размера экрана
				window.onresize = function() {
					if ( window.innerWidth <= 750 ) {
						// Удаляем текущее количество картинок в слайде
						document.getElementById(id).innerHTML = '';
						// Выводим картинки по одной за раз.
						imagesArray.forEach(outPutImagesArrayToOne); // Делаем что-то с каждым элеменом массива портфолио.
					} else {
						// Удаляем текущее количество картинок в слайде
						document.getElementById(id).innerHTML = '';
						// Выводим картинки по три за раз.
						imagesArray.forEach(outPutImagesArrayToThree); // Делаем что-то с каждым элеменом массива портфолио.
					}
				}
				*/
				
				
				/*
				// Выводим картинки по одной за раз.
				function outPutImagesArrayToOne(item, index, array) { // Элемент, индекс, массив.
					if ( index == 0 ) {
						let carouselItem = document.createElement('div'); // Создаем див.
						carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
						
						let row = document.createElement('div'); // Создаем див.
						row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
						
						let col = document.createElement('div'); // Создаем див.
						col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let carouselInner = document.getElementById(id); // Определяем куда нужно выводить созданный див.
						
						carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					} else {
						let carouselItem = document.createElement('div'); // Создаем див.
						carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
						
						let row = document.createElement('div'); // Создаем див.
						row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
						
						let col = document.createElement('div'); // Создаем див.
						col.className = "col pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let carouselInner = document.getElementById(id); // Определяем куда нужно выводить созданный див.
						
						carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					}
				}
				
				// Выводим картинки по три за раз.
				function outPutImagesArrayToThree(item, index, array) { // Элемент, индекс, массив.
					if ( index == 0 ) {
						let carouselItem = document.createElement('div'); // Создаем див.
						carouselItem.className = "carousel-item active"; // Добавляем классы создаваемому диву.
						
						let row = document.createElement('div'); // Создаем див.
						row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
						row.id = "carouselItem"+index;
						rowId = row.id;
						
						let col = document.createElement('div'); // Создаем див.
						col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let carouselInner = document.getElementById(id); // Определяем куда нужно выводить созданный див.
						
						carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					} else if ( index % 3 != 0 ) {
						let col = document.createElement('div'); // Создаем див.
						col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let row = document.getElementById(rowId); // Определяем куда нужно выводить созданный див.
						
						//carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						//carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					} else if ( index % 3 == 0 ) {
						let carouselItem = document.createElement('div'); // Создаем див.
						carouselItem.className = "carousel-item"; // Добавляем классы создаваемому диву.
						
						let row = document.createElement('div'); // Создаем див.
						row.className = "row no-gutters"; // Добавляем классы создаваемому диву.
						row.id = "carouselItem"+index;
						rowId = row.id;
						
						let col = document.createElement('div'); // Создаем див.
						col.className = "col-4 pt-3 text-center"; // Добавляем классы создаваемому диву.
						col.innerHTML = '<img src="img/slider/'+item+'" class="img-fluid" alt="...">'; // Записываем внутрь дива.
						
						let carouselInner = document.getElementById(id); // Определяем куда нужно выводить созданный див.
						
						carouselInner.append(carouselItem); // Выводим див в конце другого дива.
						carouselItem.append(row); // Выводим див в конце другого дива.
						row.append(col); // Выводим див в конце другого дива.
					}
				}
				if ( window.innerWidth <= 750 ) {
					// Выводим картинки по одной за раз.
					imagesArray.forEach(outPutImagesArrayToOne); // Делаем что-то с каждым элеменом массива портфолио.
				} else {
					// Выводим картинки по три за раз.
					imagesArray.forEach(outPutImagesArrayToThree); // Делаем что-то с каждым элеменом массива портфолио.
				}
			}
			
			
			/*
			window.onload = function() {
				if ( window.innerWidth <= 750 ) {
					// Выводим картинки по одной за раз.
					imagesArray1.forEach(outPutImagesArrayOne); // Делаем что-то с каждым элеменом массива портфолио.
				} else {
					// Выводим картинки по три за раз.
					imagesArray1.forEach(outPutImagesArrayThree); // Делаем что-то с каждым элеменом массива портфолио.
				}
			}
			*/
			/*
			window.onload = function() {
				/*
				if ( window.innerWidth <= 750 ) {
					// Выводим картинки по одной за раз.
					imagesArray2.forEach(outPutImagesArrayToOne); // Делаем что-то с каждым элеменом массива портфолио.
				} else {
					// Выводим картинки по три за раз.
					imagesArray2.forEach(outPutImagesArrayToThree); // Делаем что-то с каждым элеменом массива портфолио.
				}
				
				if ( window.innerWidth <= 750 ) {
					// Выводим картинки по одной за раз.
					imagesArray1.forEach(outPutImagesArrayOne); // Делаем что-то с каждым элеменом массива портфолио.
				} else {
					// Выводим картинки по три за раз.
					imagesArray1.forEach(outPutImagesArrayThree); // Делаем что-то с каждым элеменом массива портфолио.
				}
				*/
				/*
				if ( window.innerWidth <= 750 ) {
					// Выводим картинки по одной за раз.
					imagesArray3.forEach(outPutImagesArrayToOne3()); // Делаем что-то с каждым элеменом массива портфолио.
				} else {
					// Выводим картинки по три за раз.
					imagesArray3.forEach(outPutImagesArrayToThree3()); // Делаем что-то с каждым элеменом массива портфолио.
				}
				*/
				
			/*} */