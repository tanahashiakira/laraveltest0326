
<form action="/add" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        title
      </th>
      <td>
        <input type="text" name="title">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>