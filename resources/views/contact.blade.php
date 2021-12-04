@extends('layouts.main')

@section('title', 'Contact')
@section('meta_description', 'Information on how to reach Jake Oliger')
@section('meta_title', 'Contact Jake Oliger')

@section('content')
    <h2>I'd love to hear from you</h2>
    <div class="page-banner vratsa-4"><p>Photo I took of a ridge near Vratsa, Bulgaria</p></div>
    <p>You can reach me at <a href="mailto:jakeoliger@gmail.com">jakeoliger@gmail.com</a>. I will get back to you, if appropriate, as soon as I'm able.</p>
    <p>Alternatively, you can find me on <a href="https://linkedin.com/in/jake-oliger/">LinkedIn</a>.</p>
@endsection
<!--
<form action="POST">
    <table id="contact-form">
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="text" id="nameField" name="name" value="" placeholder="Jane Doe"></td>
        </tr>
        <tr>
            <td><label for="contactinfo">Email</label></td>
            <td><input type="text" id="contactInfo" name="contactinfo" value="" placeholder="your@email.com"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea></textarea></td>
        </tr>
    </table>
</form>
<script>
    // Just a dumb little gimmick to add a little personality to the page
    // A random name is selected to populate the placeholders
    // https://en.wikipedia.org/wiki/List_of_placeholder_names_by_language
    var placeholderNames = ["Jane Doe", "John Doe", "Matti Meikäläinen", "Maija Meikäläinen", "Jean Dupont", "Chichiko Bendeliani", "Max Mustermann", "Erika Mustermann", "Rajwinder Kaur", "Numerius Negidius", "Ola Nordmann", "Kari Nordmann", "Jan Kowalski", "Janina Kowalski"];
    
    // Index of the chosen name
    var chosenName = 0;

    // 50/50 chance of using either the American placeholders or a random one
    if (Math.random() > 0.5) {
        chosenName = Math.floor(Math.random() * placeholderNames.length);
    } else if (Math.random() > 0.5) {
        chosenName = 1;
    }

    // Split them for the email field
    var split = placeholderNames[chosenName].toLowerCase().split(" ");

    // Update the name field
    var nameField = document.getElementById("nameField");
    nameField.placeholder = placeholderNames[chosenName];
    
    // Update the email field
    var contactInfo = document.getElementById("contactInfo");
    contact.placeholder = split[0] + "@" + split[1] + ".com";
</script>
-->