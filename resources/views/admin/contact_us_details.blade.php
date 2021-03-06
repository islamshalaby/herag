@extends('admin.app')

@section('title' , __('messages.contact_us_details'))

@section('content')

        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
					
                    <h4>{{ __('messages.contact_us_details') }}</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="table-responsive"> 
                <table class="table table-bordered mb-4">
                    <tbody>
                        <tr>
                            <td class="label-table" > {{ __('messages.phone') }}</td>
                            <td>{{ $data['contact_us']['phone'] }}</td>
                        </tr>
                        <tr>
                            <td class="label-table" > {{ __('messages.message') }}</td>
                            <td>{{ $data['contact_us']['message'] }}</td>
                        </tr> 
                        <tr>
                            <td class="label-table" > {{ __('messages.date') }}</td>
                            <td>{{ $data['contact_us']['created_at'] }}</td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
    <div class="row">
        @foreach ($data['contact_us']->images as $image)
            <div style="position : relative" class="col-md-2 product_image">
                <img width="100%" src="{{image_cloudinary_url()}}{{ $image->image }}"  />
            </div>
        @endforeach
        
    </div>
@endsection



