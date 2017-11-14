@extends('layouts.app')

@section('content')
<div class="map">
    {!! Mapper::render() !!}
</div>
@endsection

<script>
    // google.maps.event.addDomListener(window, 'load', new function() {
    //         setTimeout(function () {
    //             google.maps.event.addListener(maps[0].map, 'click', function(event) {
    //                 maps[0].markers[0].setPosition(event.latLng);
    //             });
    //         }, 500);
    //     });

    // function addEventListener(map, maps)
    // {
    //     google.maps.event.addListener(maps, 'click', function (e) {
    //         var marker = new google.maps.Marker({
    //             position: e.latLng,
    //             map: map
    //         });

    //         map.panTo(e.latLng);
    //         dynamicallyCreatedMarkers.push({
    //             position: e.latLng,
    //         });
    //     });
    // }

    // $('#submit').click(function() {
    //     $.ajax({
    //             type: "POST",
    //             url: '/',
    //             data: dynamicallyCreatedMarkers.serialize(),
    //             success: function(response)
    //             {
    //                 console.log('success');
    //             }
    //         });
    //     });

    // $(document).ready(function(){
    //     $(".like").click(function(){
    //         console.log("like");
    //     });
    // });
</script>