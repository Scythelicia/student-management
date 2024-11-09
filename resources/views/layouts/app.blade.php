@livewireStyles
...
@livewireScripts
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application</title>

    <!-- Flasher CSS -->
    <link rel="stylesheet" href="{{ mix('/vendor/flasher/flasher.min.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/flasher/toastr.min.css') }}">
</head>
<body>
    <!-- Your page content -->

    <!-- Flasher JS -->
    <script src="{{ mix('/vendor/flasher/flasher.min.js') }}"></script>
    <script src="{{ mix('/vendor/flasher/toastr.min.js') }}"></script>

</body>
</html>
Livewire.on('studentAdded', message => {
    toastr.success(message);  // This will show a success toast
});
