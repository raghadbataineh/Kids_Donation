@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

{{-- form --}}
<div class="card">
        <div class="card-header">Create new Kit</div>
        <div class="card-body">
            <form action="{{ route('kits.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="UserName">Kit Title</label>
                    <input type="text" name="title" class="form-control" 
                     
                        placeholder="Kit Title">

                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="description">Kit Description</label>
                    <textarea name="description" class="form-control" placeholder="Kit Description"></textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                        <label for="UserPassword">Kit Image</label>
                        <input type="file" name="image" class="form-control"
                            placeholder="Kit Image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
       
                        <div class="form-group">
                                <label for="Status">Kit Price</label>
                                <input type="number" name="price" class="form-control"
                                    placeholder="Kit Price">
                                    @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">Choose category:</label>
                            <select name="category_id" id="category" class="form-control">
                                @foreach ($categoryNames as $categoryName)
                                    <option value="{{ $categoryName->id }}">{{ $categoryName->title }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" value="{{ $categoryName->id }}"name="category_id">
                        </div>
                    <br>
                    <input type="submit" value="Add Kit" class="btn btn-success"><br>
                </div>
            </form>
        </div>
    </div>
{{-- end form --}}
@endsection

@section('scripts')

@endsection