@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

<style>
    .mailPopup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 70%;
    height: 60%;
    background-color: #e6e6e6;
    z-index: 9999;
    display: none;
    color: black;
    text-align: center;
    border-radius: 20px;
}
.mailPopup .inner {
    padding: 20px
}
</style>

@section('content')

 <!-- Main content -->
 <section class="content">
    <!-- Default box -->
    <div style="padding: 5px 0 15px 0">
        <button type="button" class="btn btn-primary" id="sendMailToAllBtn">Send mail to all users</button>
        <span>{{ session('message_sent') }}</span>
        <div class="mailPopup">
            <div class="inner">
                <h4>Send mail to all users</h4>
                <form action="{{route('sendMailToUsers')}}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                      <label for="email" class="form-label">Title:</label>
                      <input type="text" class="form-control" id="email" placeholder="Title" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="pwd" class="form-label">Content</label>
                      <textarea name="message" id="" class="form-control" style="height: 40%;"></textarea>
                    </div>
                    <div class="form-check mb-3">
                    </div>
                    <button type="button" class="btn btn-warning" id="cancleSendingMails">Cancle</button>
                    <button type="submit" class="btn btn-primary">Mail all</button>
                  </form>
            </div>
        </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Contacts</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Contact name
                    </th>
                    <th>
                        Contact email
                    </th>

                    <th>
                        Contact phone
                    </th>
                    <th>
                        Contact address
                    </th>
                    <th>
                        Contact notes
                    </th>


                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                @foreach ($contacts as $contact)

                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$contact->name}}</td>
                     <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->address}}</td>
                    <td>{{$contact->notes}}</td>
                   {{--  <td class="project-actions text-right">
                         <a class="btn btn-info btn-sm" href="{{ route('categories.edit', $category->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a> --}}

                        {{-- <form action="{{route('categories.destroy',$category->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this Category?')">Delete</button>
                          </form> --}}
                    </td>




                </tr>
                @php
                $i++;
            @endphp
                @endforeach


            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection

@section('scripts')

@endsection
