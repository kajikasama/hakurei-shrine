function tampilkanSemuaMenu() {

  $.getJSON('data/touhou.json', function (data) {

    let touhou = data.touhou;
    $.each(touhou, function (i, data) {

      $('#daftarmenu').append('<div class="col-md-4"><div class = "card mb-3"><img src ="data/' + data.image + '" class = "card-img-top"><div class = "card-body" ><h5 class = "card-title" >' + data.nama + '</h5> <p class = "card-text" >' + data.description + '</p> <p class = "card-text" ></p> <p class = "card-text" >' + data.kategori + '</p> <p class = "card-text" ></p> <h5 class = "card-title" ></h5> <a href = "#"class = "btn btn-primary" > Go To Detail </a> </div></div>');

    });

  });
}
tampilkanSemuaMenu();

//jekueri tolong cari kan saya navling
// dimana saat di clik jalan kan fungsi berikut ini
$('.nav-link').on('click', function () {


  //jekueri tolong carikan saya klas navling hapus class 'active'
  // tersebut
  $('.nav-link').removeClass('active');

  //dan class yang diklik ini / class yang bersangkutan
  //tambah klas 'active'
  $(this).addClass('active');

  let kategori = $(this).html();
  $('h1').html(kategori);

  if (kategori == 'All Menu') {

    $('#daftarmenu').html('');
    tampilkanSemuaMenu();
    return;

  }

  $.getJSON('data/touhou.json', function (data) {


    let touhou = data.touhou;
    let content = '';
    $.each(touhou, function (i, data) {
      // console.log(kategori.toLowerCase());
      if (data.kategori == kategori.toLowerCase()) {

        content += '<div class="col-md-4"><div class="card"><img src="data/' + data.image + '" class="card-img-top" alt="..."><div class="card-body"> <h5 class="card-title">' + data.nama + '</h5><p class="card-text">' + data.description + '</p><p class="card-text">Some quick example text to build the card title and make up the bulk of the card s content.</p><a href="#" class="btn btn-primary">Go to detail</a></div></div></div>';

      }

    });

    $('#daftarmenu').html(content);

  });

});