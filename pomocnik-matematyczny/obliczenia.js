function dodawanie() {
	
	var a = document.getElementById('a').value;
	var b = document.getElementById('b').value;

	a=a/1

	b=b/1

	var wynik = a + b;

	document.getElementById('wynik').innerHTML = "Wynik: " +wynik;
}
function odejmowanie() {
	
	var a = document.getElementById('a').value;
	var b = document.getElementById('b').value;

	a=a/1

	b=b/1

	var wynik = a - b;

	document.getElementById('wynik').innerHTML = "Wynik: " +wynik;
}
function mnozenie() {

	var a = document.getElementById('a').value;
	var b = document.getElementById('b').value;

	a=a/1

	b=b/1

	var wynik = a * b;

	document.getElementById('wynik').innerHTML = "Wynik: " +wynik;
}
function dzielenie() {
	
	var a = document.getElementById('a').value;
	var b = document.getElementById('b').value;

	a=a/1

	b=b/1

	var wynik = a / b;

	document.getElementById('wynik').innerHTML = "Wynik: " +wynik;
}
function potegowanie() {
	
	var a = document.getElementById('a').value;
	var b = document.getElementById('b').value;

	a=a/1

	b=b/1

	var wynik = Math.pow(a, b);

	document.getElementById('wynik').innerHTML = "Wynik: " +wynik;
}