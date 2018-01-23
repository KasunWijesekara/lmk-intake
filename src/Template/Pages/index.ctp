<div class="container-fluid" id="topbanner">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
      <h3>
        LetMeKnow.lk (Pvt) Ltd.
      </h3>

      <h5>
        2018 Q1 Intake - Photographers
      </h5>
    </div>
  </div>
</div>

<div class="container-fluid" id="secondbanner">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center hrleft ">
      <h5>
        January 13,14,20,21
      </h5>
      <h6>
        Dates we expect you to be there
      </h6>
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
      <h5>
        TWC Innovations Corporate Office
      </h5>
      <h6>
        Where we going to meet you
      </h6>
    </div>
  </div>
  <hr>
</div>

<div class="container" id="fontbanner">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <form method="post" action="/add-attendies">
        <div class="input-group mb-3">
          <select class="custom-select" id="participant_id" name="participant_id">
            <option selected>Select your name</option>
            <?php if (!empty($ParticipantInfo)){foreach ($ParticipantInfo as $participant): ?>
              <option value="<?=h($participant->id)?>">
                <?=h($participant->name)?>
              </option>
            <?php endforeach;}?>
          </select>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
        <h5 class="text-center">
          Please select a date and time that you are comfortable for an interview
        </h5>

        <p>
          Select the most convenient time for you and make sure you arrive there five (5) minutes before your allocated time slot. Late attendees will not be interviewed until the remaining candidates are over. Bring a printed copy of your CV and some sample photographs of your work (event photography strongly recommended) in a USB storage.
        </p>
      </div>



      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="input-group">
          <input class="form-control" type="date" name="date" min="2017-12-31" max="2018-01-30" >
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="input-group mb-3">
          <select class="custom-select" id="time" name="time">
            <option selected>Select your time slot</option>
            <?php if (!empty($TimeslotsInfo)){foreach ($TimeslotsInfo as $timeslot): ?>
              <option value="<?=h($timeslot->time)?>">
                <?=h($timeslot->time)?>
              </option>
            <?php endforeach;}?>
          </select>
        </div>
      </div>

      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
        <input type="hidden" name="status" value="1">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-outline-danger">Reset</button>
      </form>
    </div>
  </div>
</div>




<div class="container-fluid" id="map" style="height: 500px;width: auto"></div>

<script>


  function initMap() {
    var markerPosition = {lat: 6.848161, lng: 79.879392};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 16,
      center: markerPosition,
      styles: [
      {
        featureType: "water",
        elementType: "all",
        stylers: [
        {
          "color": "#46bcec"
        },
        {
          "visibility": "on"
        }
        ]
      }, {
        featureType: "road",
        elementType: "all",
        stylers: [
        {
          "saturation": -100
        },
        {
          "lightness": 45
        }
        ]
      }, {
        featureType: "road.highway",
        elementType: "all",
        stylers: [
        {
          "visibility": "simplified"
        }
        ]
      },{
        featureType: "administrative",
        elementType: "labels.text.fill",
        stylers: [
        {
          "color": "#444444"
        }
        ]
      },{
        featureType: "landscape",
        elementType: "all",
        stylers: [
        {
          "color": "#f2f2f2"
        }
        ]
      },{
        featureType: "poi",
        elementType: "all",
        stylers: [
        {
          "visibility": "off"
        }
        ]
      },{
        featureType: "road.arterial",
        elementType: "labels.icon",
        stylers: [
        {
          "visibility": "off"
        }
        ]
      },{
        featureType: "transit",
        elementType: "all",
        stylers: [
        {
          "visibility": "off"
        }
        ]
      }
      ]
    });

    var contentString = "<h3>TWC Innovations</h3><p>25 Vijitha Road<br>Nedimala<br>Dehivala</p><button class='ui right labeled icon button' onclick='goToMap()'>Get Directions <i class='right chevron icon'></i></button>";

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: markerPosition,
      map: map,
      title: 'TWC Innovations',
      animation: google.maps.Animation.DROP,
      icon: 'http://twcwebs.com/lmk/tmp/marker.png'
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
  }

  function goToMap(){
    window.open("https://www.google.com/maps/place/TWC+Innovations+(PVT)+LTD/@6.8481038,79.8793112,20.63z/data=!4m19!1m13!4m12!1m4!2m2!1d79.8794779!2d6.8481866!4e1!1m6!1m2!1s0x3ae25afc85a4c385:0xc71abc4fd9c7890e!2sTWC+Innovations+(PVT)+LTD,+25,+Vijitha+Rd,+Nedimala,+Dehiwala,+Dehiwala+10350!2m2!1d79.8795!2d6.848155!3m4!1s0x3ae25afc85a4c385:0xc71abc4fd9c7890e!8m2!3d6.848155!4d79.8795");
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6nkhiHVJcddbVYh3uQVKgP5cq9Ih8LqE&callback=initMap">
</script> 