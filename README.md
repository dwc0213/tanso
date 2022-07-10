# tanso
carbon footprint calculator
<h3>기업 홈페이지 탄소 발자국 계산기 페이지 구현</h3>

기업 홈페이지 제작시 반응형이 아닌 PC/MOBILE 적응형으로 제작하였으므로 탄소발자국 계산기도 PC모바일 따로 제작했다.

1. 동작원리는 파이프구경 변수로 선언된 pipe를 select을 하면 pipeSet() 함수를 수행해서 select한 변수로 pipeArr 배열에 담긴 숫자를 가져온다.
2. 파이프길이 변수로 선언된 p_length에 숫자를 입력한다.
3. 파이프길이를 숫자로 입력하면 onkeyup 이벤트를 통해 pipeSet()함수를 수행해서 소수점으로 표현하는 값은 math.round()함수를 사용했으며, 숫자를 리턴해야 하는 값은 parseInt 함수를 사    용했다.

현재 운영중인 사이트 링크

http://i-web.kr/chungnam/?3lWyhaT2
