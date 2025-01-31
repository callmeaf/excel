<table>
    <thead>
    <tr>
        <th>{{__('callmeaf-excel::v1.exports.roles.name')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.roles.name_fa')}}</th>
        <th>
            {{__('callmeaf-excel::v1.exports.roles.created_at')}}
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($roles as $role)
        <tr>
            <td>{{ $role->name }}</td>
            <td>{{ $role->name_fa }}</td>
            <td>
                {{ $role->createdAtText }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
