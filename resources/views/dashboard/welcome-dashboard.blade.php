{{-- @extends('dashboard.dashboard_layouts.master') --}}
@extends('dashboard.dashboard_layouts.master')

@section('title','Main')


@section('css')
@endsection

@section('Main')

@endsection

@section('Control Board')

@endsection

@section('content')
<style>
  html{
 width:100%;
  height:100%;
}
body
{
  width:100%;
  height:100%;
  margin:0px;
  padding:2rem;
  background-image:url(https://www.bing.com/th?id=OHR.NorthSeaStairs_EN-IN3347217370_1920x1080.webp&qlt=50);
  background-position: center;
    background-size: cover;
}

.h-fit
{
  height: fit-content;
}
.card_icon
{
      background: #ffffff1f;
    border-radius: 1rem;
}

.blur
{
  backdrop-filter: blur(6px);
}

.glass
{
    backdrop-filter: blur(3px);
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 1rem;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
    min-width: 180px;
    display: flex;
    flex-direction: row;
    position: relative;
    transition: transform 250ms;
    margin: auto;
}
.item{
  background:rgba(255,255,255,0.05);
  color:#111;
  border-radius:1rem;
  backdrop-filter: blur(8px);
  border: 1px solid #cecece80;
  cursor:pointer;
}

.item:hover
{
  background:white;
}




</style>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">

              <h3>{{ $userCount }}<sup style="font-size: 20px"></sup></h3>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-user"></i>
            </div>
            <a href="{{url('dashboard/users')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
              <h3>{{ $kitCount }}<sup style="font-size: 20px"></sup></h3>
              <p> Kits</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{url('dashboard/kits')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $adminCount }}<sup style="font-size: 20px"></sup></h3>

              <p>Admins</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            <a href="{{url('dashboard/admins')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $paymentCount }}<sup style="font-size: 20px"></sup></h3>

              <p>Donations</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-money-bill"></i>
            </div>

            <a href="{{url('dashboard/donations')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
          </div>
        </div>
        <br>
        <br>

        <!-- ./col -->
      </div>
      <!-- /.row -->
        <div class="glass w-11/12 flex p-4 wrap gap-2 justify-center">
          <!--  widget    -->
            <div class="flex flex-col h-full p-4 gap-2 justify-center">
              <div class="glass p-2 text-xl">
              Quick Notes to remember
              </div>
              <div class="time glass p-2 text-3xl text-center"></div>
              <div class="day glass p-2 text-2xl text-center"></div>


            </div>
          <!--  links  -->
            <div class="items glass flex p-4 flex-wrap gap-2 justify-center"></div>
          </div>


      <!-- Main row -->
      {{-- <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">


          <!-- DIRECT CHAT -->
          <div class="card direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">Direct Chat</h3>

              <div class="card-tools">
                <span title="3 New Messages" class="badge badge-primary">3</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                  <i class="fas fa-comments"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Working with AdminLTE on a great new app! Wanna join?
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    I would love to.
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

              </div>
              <!--/.direct-chat-messages-->

              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Count Dracula
                          <small class="contacts-list-date float-right">2/28/2015</small>
                        </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Sarah Doe
                          <small class="contacts-list-date float-right">2/23/2015</small>
                        </span>
                        <span class="contacts-list-msg">I will be waiting for...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Nadia Jolie
                          <small class="contacts-list-date float-right">2/20/2015</small>
                        </span>
                        <span class="contacts-list-msg">I'll call you back at...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Nora S. Vans
                          <small class="contacts-list-date float-right">2/10/2015</small>
                        </span>
                        <span class="contacts-list-msg">Where is your new...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          John K.
                          <small class="contacts-list-date float-right">1/27/2015</small>
                        </span>
                        <span class="contacts-list-msg">Can I take a look at...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Kenneth M.
                          <small class="contacts-list-date float-right">1/4/2015</small>
                        </span>
                        <span class="contacts-list-msg">Never mind I found...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contacts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-primary">Send</button>
                  </span>
                </div>
              </form>
            </div>
            <!-- /.card-footer-->
          </div>
          <!--/.direct-chat -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map card -->
          <div class="card bg-gradient-primary">


            </div>
            <!-- /.card-body-->

          </div>
          <!-- /.card -->


        </section>
        <!-- right col -->
      </div> --}}
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <script>
    document.addEventListener("DOMContentLoaded",()=>{
  loadItems()
  loadTime()
})
function loadTime()
{
  const weekday = ["Sun","Mon","Tue","Wed","Thur","Fri","Sat"];

        const currentDate = new Date();
        const hours = currentDate.getHours();
        const minutes = currentDate.getMinutes();
        const formattedTime = `${hours < 10 ? '0' : ''}${hours}:${minutes < 10 ? '0' : ''}${minutes}`;
        document.querySelector('.time').textContent = formattedTime
  document.querySelector(".day").textContent = weekday[currentDate.getDay()]
}

function open_url(url)
{
  window.open(url, '_blank');
}

function loadItems()
{
  var items = [
    {
      "icon":"fa-brands fa-google",
      "text":"Google",
      "link":"https://www.google.com/",
    },
    {
      "icon":"fa-brands fa-youtube",
      "text":"Youtube",
      "link":"https://youtube.com",
    },

    {
      "icon":"fa-brands fa-codepen",
      "text":"Codepen",
      "link":"https://codepen.io",
    },
    {
      "icon":"fa-brands fa-stack-overflow",
      "text":"Stack",
      "link":"https://stackoverflow.com/",
    },
    {
      "icon":"fa-brands fa-pinterest",
      "text":"Pinterest",
      "link":"https://pinterest.com/",
    },
    {
      "icon":"fa-brands fa-figma",
      "text":"Figma",
      "link":"https://figma.com/",
    },
    {
      "icon":"fa-brands fa-whatsapp",
      "text":"Whatsapp",
      "link":"https://web.whatsapp.com/",
    },
  ]
  let html=""
  items.forEach((obj,index)=>{
    html+=`
    <a
    target="_blank"
    href="${obj.link}"
    class="w-24 shadow item flex flex-col items-center p-4">
    <i class="${obj.icon} text-3xl"></i>
    <div>${obj.text}</div>
    </a>
    `
  })
  document.querySelector(".items").innerHTML=html;
}
  </script>
@endsection

@section('scripts')

@endsection
