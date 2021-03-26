@extends('pages.master')
@section('content')
<h1>Flowers data</h1>
<table>
    <tr>
    <th>Nume</th>
    <th>Marime</th>
    <th>Culoare</th>
    <th>Pret</th>
    </tr>
 @foreach($flowers1 as $flower)
 <tr>
     <td><?php echo $flower->nume;?></td>
     <td><?php echo $flower->culoare;?></td>
     <td><?php echo $flower->marime;?></td>
     <td><?php echo $flower->pret;?></td>
 </tr>
 @endforeach
</table><br/><br/>
<table>
    <tr>
    <th>Nume</th>
    <th>Marime</th>
    <th>Culoare</th>
    <th>Pret</th>
    </tr>
 @foreach($flowers2 as $flower)
 <tr>
<td><?php echo $flower->nume;?></td>
     <td><?php echo $flower->culoare;?></td>
     <td><?php echo $flower->marime;?></td>
     <td><?php echo $flower->pret;?></td>
 </tr>
 @endforeach
</table>
@endsection
