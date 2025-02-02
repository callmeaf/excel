<table>
    <thead>
    <tr>
        <th>{{__('callmeaf-excel::v1.exports.product_categories.parent')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.product_categories.status')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.product_categories.type')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.product_categories.title')}}</th>
        <th>{{__('callmeaf-excel::v1.exports.product_categories.slug')}}</th>
        <th>
            @if(isOnlyTrashedQueryParam())
                {{__('callmeaf-excel::v1.exports.product_categories.deleted_at')}}
            @else
                {{__('callmeaf-excel::v1.exports.product_categories.created_at')}}
            @endif
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($productCategories as $productCategory)
        <tr>
            <td>
                @if($productCategory->hasParent())
                    {{$productCategory->slug}}
                @endif
            </td>
            <td>{{ $productCategory->statusText }}</td>
            <td>{{ $productCategory->typeText }}</td>
            <td>{{ $productCategory->title }}</td>
            <td>{{ $productCategory->slug }}</td>
            <td>
                @if(isOnlyTrashedQueryParam())
                    {{ $productCategory->deletedAtText }}
                @else
                    {{ $productCategory->createdAtText }}
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
