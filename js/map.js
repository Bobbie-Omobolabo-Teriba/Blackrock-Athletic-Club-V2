/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


window.onload = onAllAssetsLoaded;
            document.write("<div id='loadingMessage'>Loading...</div>");
            function onAllAssetsLoaded()
            {
                // hide the webpage loading message
                document.getElementById('loadingMessage').style.visibility = "hidden";

                displayMap();
            }

            function displayMap()
            {
                var TITLE = 0;
                var CONTENT = 1;
                var LATITUDE = 2;
                var LONGITUDE = 3;

                var locations = [['Blackrock', 'Blackrock Athletics Club, Dundalk', 53.96424215, -6.37146395]];

                var dkit_map = new google.maps.Map(document.getElementById('mapDiv'),
                        {zoom: 12,
                            center: new google.maps.LatLng(53.96424215, -6.37146395),
                            mapTypeId: google.maps.MapTypeId.ROADMAP});

                var location_marker;
                var mapWindow = new google.maps.InfoWindow();

                for (var i = 0; i < locations.length; i++)
                {
                    location_marker = new google.maps.Marker({title: locations[i][TITLE],
                        position: new google.maps.LatLng(locations[i][LATITUDE], locations[i][LONGITUDE]),
                        map: dkit_map});

                    google.maps.event.addListener(location_marker, 'click', (function (location_marker, i)
                    {
                        return function ()
                        {
                            mapWindow.setContent(locations[i][CONTENT]);
                            mapWindow.open(dkit_map, location_marker);
                        };
                    })(location_marker, i));
                }
            }

            function dropFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            function filterFunction() {
                var input, filter, ul, li, a, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                div = document.getElementById("myDropdown");
                a = div.getElementsByTagName("a");
                for (i = 0; i < a.length; i++) {
                    if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                    } else {
                        a[i].style.display = "none";
                    }
                }
            }