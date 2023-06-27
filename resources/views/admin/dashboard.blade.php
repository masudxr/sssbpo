<x-admin>
    <section id="request" class="mt-6">
        <h2 class="mb-3">
            Get Request from Stranger!
        </h2>
        <table id="customers">
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            @foreach($contacts as $contact)

            <tr>
                <td>{{$contact->name}} </td>
                <td>{{$contact->email}} </td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->body}}</td>
                <td>
                    <a href="delete?id={{$contact->id}}">Delete</a>
                </td>
            </tr>
            @endforeach

        </table>
    </section>
</x-admin>