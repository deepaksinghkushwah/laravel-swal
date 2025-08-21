@if(session('swal'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: '{{ session('swal.type') }}',
            title: '{{ session('swal.title') }}',
            text: '{{ session('swal.message') }}',
        });
    </script>
@endif
