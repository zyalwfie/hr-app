import "leaflet/dist/leaflet.css";
import "lodash/lodash.min.js";
import "leaflet/dist/leaflet.js";

const OFFICE_LOCATION = {
    lat: -8.599801795546826,
    lng: 116.1213972712707,
};

const OFFICE_RADIUS = 20;

function getUserLocation() {
    return new Promise((resolve, reject) => {
        if (!navigator.geolocation) {
            reject("Geolocation not supported");
        }

        navigator.geolocation.getCurrentPosition(
            (position) => {
                resolve({
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                });
            },
            (error) => {
                reject(error.message);
            },
            {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 0,
            }
        );
    });
}

window.addEventListener("load", async () => {
    const map = L.map("hs-pin-leaflet").setView(
        [OFFICE_LOCATION.lat, OFFICE_LOCATION.lng],
        16
    );

    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
        maxZoom: 19,
    }).addTo(map);

    const officeCircle = L.circle([OFFICE_LOCATION.lat, OFFICE_LOCATION.lng], {
        radius: OFFICE_RADIUS,
        color: "#2563eb",
        fillColor: "#3b82f6",
        fillOpacity: 0.3,
    })
        .addTo(map)
        .bindPopup("Office Area");

    try {
        const userLocation = await getUserLocation();

        const userMarker = L.marker([userLocation.lat, userLocation.lng], {
            icon: L.icon({
                iconUrl:
                    "https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png",
                shadowUrl:
                    "https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png",
            }),
        })
            .addTo(map)
            .bindPopup("Your location");

        document.getElementById("latitude").value = userLocation.lat;
        document.getElementById("longitude").value = userLocation.lng;

        const distance = map.distance(
            [userLocation.lat, userLocation.lng],
            [OFFICE_LOCATION.lat, OFFICE_LOCATION.lng]
        );

        console.log(distance);

        const submitBtn = document.getElementById("submit");
        const allowAlert = document.getElementById("allow-present");
        const notAllowedAlert = document.getElementById("not-allowed-present");

        if (distance <= OFFICE_RADIUS) {
            submitBtn.disabled = false;
            allowAlert.classList.remove("hidden");
        } else {
            submitBtn.disabled = true;
            notAllowedAlert.classList.remove("hidden");
        }
    } catch (error) {
        alert("Failed to get your location: " + error);
    }
});
