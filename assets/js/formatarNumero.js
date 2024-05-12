function formatarNumero(numeroContato) {
    const numeroLimpo = numeroContato.value.replace(/\D/g, '');
    const numeroFormatado = numeroLimpo.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2 - $3');
    numeroContato.value = numeroFormatado;
}