from django.shortcuts import render
from django.http import HttpResponse



def bhaskara(request):
    return render(request, 'formulario.html')

def ip(request):
    a = int(request.POST.get('a'))
    b = int(request.POST.get('b'))
    c = int(request.POST.get('c'))

    delta = (b * b) - (4 * a * c)
    raiz = delta**0.5
    if delta < 0:
        return HttpResponse('Não existe resultado real, pois delta é menor do que 0')
    if delta == 0:
        x0 = -(b) // 2 * a
        return HttpResponse(f'{x0}')
    else:
        x1 = float()
        x2 = float()
        x1 = (- (b) + raiz) // 2*a
        x2 = (- (b) - raiz) // 2*a
        return HttpResponse(f'Com os valores dados, x1 = {x1} e x2 = {x2}')
    

   
    


    

    
    
    


