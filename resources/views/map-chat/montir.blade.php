@extends('layouts.all')

@section('header')


@section('section')
    <link href="{{ asset('assets/css/map.css') }}" rel="stylesheet">
    <div class="container d-flex justify-content-center form-control shadow-sm" style="margin-top:8rem; margin-bottom:2rem;">
        <div class="row w-50">
            <hr style="height: 1px; color:red;">
            <div class="col">
                <img src="assets/img/rafi.jpg" alt="photo" class="poto">
            </div>
            <div class="col">
                <hr>
                
                <h5>Dhuha</h5>
                <h6>Jl. Kebon Nanas 3 No.24, Grogol Utara, Kebayoran Lama, Jakarta Selatan</h6>
                <hr>
                    <a href="{{ route('input-order') }}" class="btn btn-danger btn-sm">Input order</a>
                </span>
                
            </div>
            <hr style="height: 1px; color:red;">
            
        </div>
        
    </div>
    
    <div class="row">
        <div class="col-sm-7">
            
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="700" height="600" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Jl.%20Kebon%20Nanas%20III%20No.24&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://123movies-to.org"></a><br>
                    <style>
                        .mapouter {
                            position: flex;
                            justify-content: center;
                            margin-left: 8rem;
                            height: 600px;
                            width: 700px;
                        }
    
                    </style><a href="https://www.embedgooglemap.net"></a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 600px;
                            width: 700px;
                        }
    
                    </style>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="live-chat" style="margin-top: -.25rem;">
                <div class="header form-control text-center" style="background-color: #198754; color:white; height:30px;">
                    <h6>Live Chat</h6>
                </div>
                <div id="messages" class="pesan form-control" style="background-color: rgb(240, 240, 240)" ></div>
                <form id="form1" class="">
                    <input type="text" id="message" placeholder="Enter Message" autocomplete="off" class="form-control">
                    <input type="submit" class="form-control btn btn-danger">
                </form>
            </div>
        </div>
        
        

    </div>
    </div>






    <script>
        // document.getElementById('form1').addEventListener('submit', function(evt) {
        //     console.log('jalan');
        //     evt.preventDefault();
        // })
    </script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js";
        import {
            getDatabase,
            ref,
            set,
            push,
            onValue,
            remove
        } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-database.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyB1JDTRE09NisMmpv3aVCL0JjmQKS5gQzU",
            authDomain: "vhs-servis.firebaseapp.com",
            projectId: "vhs-servis",
            storageBucket: "vhs-servis.appspot.com",
            messagingSenderId: "758854524294",
            appId: "1:758854524294:web:be05a2090e264a30ebe007",
            databaseURL: "https://vhs-servis-default-rtdb.asia-southeast1.firebasedatabase.app/",
            measurementId: "G-YG93TBNR9J"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const database = getDatabase(app);
        const newMessage = ref(database, 'messages');
        var myName = '{{ Auth::user()->name }}'

        function deleteMessage(self) {
            var messageId = self.getAttribute("data-id");
            database(app).newMessage.child(messageId).remove();
        }

        document.getElementById('form1').addEventListener('submit', function(evt) {
            var message = document.getElementById("message").value
            const newMessage = ref(database, 'messages');
            const pushMessage = push(newMessage)
            set(pushMessage, {
                "sender": myName,
                "message": message
            });
            evt.preventDefault();
            return false;
        })



        onValue(newMessage, (snapshot) => {
            document.getElementById('messages').innerHTML = ""
            const data = snapshot.val();
            for (const key in data) {
                if (Object.hasOwnProperty.call(data, key)) {
                    const element = data[key];


                    if (element.sender == myName) {
                        // var html = document.getElementById('messages').innerHTML;
                        // html += '<li>' + element.sender + ': ' + element.message;
                        // html += '<button data-id = "'+ key +'" onclick="deleteMessage(this)">';
                        // html += "Delete";
                        // html += "</button>";
                        // html += '</li>'
                        document.getElementById('messages').innerHTML +=
                            '<li class ="d-flex align-items-end flex-column bd-highlight mb-3">' + element
                            .sender + ': ' + element
                            .message + '<button id="deleteBtn" data-id = "' + key +
                            '">Delete</button> </li>'
                    } else {
                        document.getElementById('messages').innerHTML += '<li>' + element.sender + ': ' + element
                            .message + '</li>'
                    }
                }

            }
            // for (const key in data) {
            //     console.log(data);
            // }
            // updateStarCount(postElement, data);
            document.getElementById('deleteBtn').addEventListener('click', function(evt) {
                const removeMessage = ref(database, 'messages/' + evt.target.getAttribute('data-id'));
                const totMessage = remove(removeMessage);
                totMessage
                evt.preventDefault();

            })
        });
    </script>
@endsection
