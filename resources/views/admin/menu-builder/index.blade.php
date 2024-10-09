@extends('admin.layouts.master')

@section('content')
    {!! Menu::render() !!}
@endsection


@push('scripts')
    {!! Menu::scripts() !!}
@endpush


@php
    /* @var \Statikbe\FilamentFlexibleContentBlocks\Filament\Form\Fields\Blocks\Data\CallToActionData $callToAction */
@endphp

<div {{$attributes}}>
    <a href="{{$callToAction->url}}"
    @if($callToAction->label) title="{{FilamentFlexibleContentBlocks::replaceParameters($callToAction->label)}}" @endif
    class="@if($callToAction->buttonStyle) {{$callToAction->buttonStyle}} @endif  @if($isFullyClickable) before:absolute before:inset-0 @endif"
    @if($callToAction->openNewWindow) target="_blank" rel="noopener noreferrer" @endif>
        @if($callToAction->label)
            {{FilamentFlexibleContentBlocks::replaceParameters($callToAction->label)}}
        @else
            &xrarr;
        @endif
    </a>
</div>
