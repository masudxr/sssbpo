<x-admin>
    <section id="request" class="mt-6">
        <h2 class="mb-3">
            Get Contact Request
        </h2>
        <table id="customers">
            <tr>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            @foreach($contacts as $contact)

            <tr>
                <td> {{$contact->email}} </td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->body}}</td>
                <td>
                    <a href="edit?id={{$contact->id}}">Edit</a> |
                    <a href="delete?id={{$contact->id}}">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>
    </section>

</x-admin>