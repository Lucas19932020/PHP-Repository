<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    
	<div id="page-wrap">

		<h1>Quiz sobre juros simples e composto</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>Um capital aplicado a juros simples durante 2 anos, sob taxa de juros de 5% ao mês, gerou um montante de R$ 26.950,00. Determine o valor do capital aplicado. </h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Capital = R$ 21250,00. </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Capital = R$ 12250,00.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Capital = R$ 15750,00.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Capital = R$ 13750,00.</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>(UF–PI)<br>Uma quantia foi aplicada a juros simples de 6% ao mês, durante 5 meses e, em seguida, o montante foi aplicado durante mais 5 meses, a juros simples de 4% ao mês. No final dos 10 meses, o novo montante foi de R$ 234,00. Qual o valor da quantia aplicada inicialmente? </h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) O valor aplicado inicialmente era de R$ 175,00.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) O valor aplicado inicialmente era de R$ 125,00.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) O valor aplicado inicialmente era de R$ 150,00.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) O valor aplicado inicialmente era de R$ 110,00.</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Determinado capital gerou, após 24 meses, um montante de R$ 15.000,00. Sabendo que a taxa de juros é de 2% ao mês, determine o valor desse capital.</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) O valor do capital é R$9540,58.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) O valor do capital é R$8750,42.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) O valor do capital é R$9325,82.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) O valor do capital é R$9225,68.</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Quanto terei de aplicar hoje num fundo de renda fixa para que, ao final de 10 anos a uma taxa de 1,3%a.m., haja um montante de R$ 100.000,00?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Terei de aplicar R$ 22.315,73.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Terei de aplicar R$ 23.176,22.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Terei de aplicar R$ 21.755,25.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Terei de aplicar R$ 21.225,92.</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>(ENEM 2018 - Questão 137 Caderno Azul - Adaptado)<br>
                    Um contrato de empréstimo prevê que quando uma parcela é paga de forma antecipada, conceder-se-á uma redução de juros de acordo com o período de antecipação. Nesse caso, paga-se o valor presente, que é o valor, naquele momento, de uma quantia que deveria ser paga em uma data futura. Um valor presente P submetido a juros compostos com taxa i, por um período de tempo n, produz um valor futuro V determinado pela fórmula:<p align = center> V = P*(1+1)^n </p>
                    Em um contrato de empréstimo com sessenta parcelas fixas mensais, de R$820,00, a uma taxa de juros de 1,32% ao mês, junto com a trigésima parcela será paga antecipadamente uma outra parcela, desde que o desconto seja superior a 25% do valor da parcela.<br>
                    Utilize 0,2877 como aproximação para In(4/3) e 0,0131 como aproximação para In (1,0132).<br><br>
                    A primeira das parcelas que poderá ser antecipada junto com a 30ª é a
                    </h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) 52ª</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) 55ª</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) 56ª</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) 51ª</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Enviar Resultados" />
		
		</form>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>