from django.shortcuts import render
from django.http import HttpResponse

def ip(request):
    return render(request, 'imc.html')

     
def imc(request):
    peso = float(request.POST.get('peso'))
    altura = float(request.POST.get('altura'))

    imc = peso / (altura * altura)
    
    if imc < 18.5:
        return HttpResponse(f"Seu imc é {imc:.2f}, índice: 'Magreza'")
    elif imc > 18.5 and imc <24.9:
        return HttpResponse(f"Seu imc é {imc:.2f}, índice: 'Normal'")
    elif imc > 25 and imc <29.9:
        return HttpResponse(f"Seu imc é {imc:.2f}, índice: 'Sobrepeso'")
    else:
        return HttpResponse(f"Seu imc é {imc:.2f}, índice: 'Obesidade'")
