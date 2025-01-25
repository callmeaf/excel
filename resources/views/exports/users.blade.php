<table>
    <thead>
    <tr>
        <th>{{__('callmeaf-excel::v1.exports.users.status')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.users.type')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.users.mobile')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.users.email')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.users.national_code')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.users.first_name')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.users.last_name')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.users.created_at')}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->statusText }}</td>
            <td>{{ $user->typeText }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->national_code }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->createdAtText }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
