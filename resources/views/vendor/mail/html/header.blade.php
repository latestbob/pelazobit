<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://pelazobit.com.ng/realogo.png" class="logo" alt="Laravel Logo"style="width:100px; height:90px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
