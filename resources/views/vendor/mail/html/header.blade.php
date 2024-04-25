@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Wolkige Werbung')
<img class="logo" alt="Wolkige Werbung Logo" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='96' height='96' viewBox='0 0 24 24'%3E%3Cmask id='lineMdCloudLoop0'%3E%3Cg fill='%23fff'%3E%3Ccircle cx='12' cy='10' r='6'%3E%3Canimate attributeName='cx' dur='30s' repeatCount='indefinite' values='12;11;12;13;12'/%3E%3C/circle%3E%3Crect width='9' height='7' x='8' y='13'/%3E%3Crect width='15' height='12' x='1' y='8' rx='6'%3E%3Canimate attributeName='x' dur='19s' repeatCount='indefinite' values='1;0;1;2;1'/%3E%3C/rect%3E%3Crect width='13' height='10' x='10' y='10' rx='5'%3E%3Canimate attributeName='x' dur='23s' repeatCount='indefinite' values='10;9;10;11;10'/%3E%3C/rect%3E%3C/g%3E%3C/mask%3E%3Crect width='24' height='24' fill='rgb(219, 39, 119)' mask='url(%23lineMdCloudLoop0)'/%3E%3C/svg%3E">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
