@include('layout/dashboard')


<link rel="stylesheet" href="{{ asset('css\note.css') }}">

<div class="note">
    <h1>Notice Board</h1>

<form id="notice-form">
    <input type="text" id="notice-input" placeholder="Enter your notice">
    <button type="submit">Add Note</button>
</form>

<ul id="notice-list"></ul>
</div>
<script src="{{ asset('js/note.js') }}"></script>




