
<table>
	<header>
		<a class="btn-prev fontawesome-angle-left" href="/event/Misery/{{ $calendar['previous_month_url'] }}"></a>
		<h2>{{ $calendar['current_month']->format('M Y') }}</h2>
		<a class="btn-next fontawesome-angle-right" href="/event/Misery/{{ $calendar['next_month_url'] }}"></a>
	</header>
	<tr>
	@foreach ($calendar['weeks'][0] as $day)
		<td>{{ $day['day']->format('D') }}</td>
	@endforeach
	
	</tr>
	@foreach ($calendar['weeks'] as $week)
		<tr>
			@foreach ($week as $day)
				<td>
					<a href="/event/Misery/{{ $day['day']->year }}/{{ $day['day']->month }}/{{ $day['day']->day }}" class="{{ $day['class'] }}">{{ $day['day']->day }}
					</a>
				</td>
			@endforeach
		</tr>
	@endforeach
</table>