<table>
  <tr>
    <th>id</th>
    <th>title</th>
  </tr>

@foreach ($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->title}}
  </tr>
  @endforeach
</table>