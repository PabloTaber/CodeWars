const matrizEventos = {
    "CLOSED-APP_PASSIVE_OPEN" : "LISTEN",
    "CLOSED-APP_ACTIVE_OPEN" : "SYN_SENT",
    "LISTEN-RCV_SYN": "SYN_RCVD",
    "LISTEN-APP_SEND": "SYN_SENT",
    "LISTEN-APP_CLOSE": "CLOSED",
    "SYN_RCVD-APP_CLOSE": "FIN_WAIT_1",
    "SYN_RCVD-RCV_ACK": "ESTABLISHED",
    "SYN_SENT-RCV_SYN" : "SYN_RCVD",
    "SYN_SENT-RCV_SYN_ACK": "ESTABLISHED",
    "SYN_SENT-APP_CLOSE": "CLOSED",
    "ESTABLISHED-APP_CLOSE": "FIN_WAIT_1",
    "ESTABLISHED-RCV_FIN": "CLOSE_WAIT",
    "FIN_WAIT_1-RCV_FIN": "CLOSING",
    "FIN_WAIT_1-RCV_FIN_ACK": "TIME_WAIT",
    "FIN_WAIT_1-RCV_ACK": "FIN_WAIT_2",
    "CLOSING-RCV_ACK": "TIME_WAIT",
    "FIN_WAIT_2-RCV_FIN" : "TIME_WAIT",
    "TIME_WAIT-APP_TIMEOUT": "CLOSED",
    "CLOSE_WAIT-APP_CLOSE": "LAST_ACK",
    "LAST_ACK-RCV_ACK": "CLOSED"
};

const matrizEstados = {
    "CLOSED" : ["APP_PASSIVE_OPEN", "APP_ACTIVE_OPEN"],
    "LISTEN" : ["RCV_SYN", "APP_SEND", "APP_CLOSE"],
    "SYN_RCVD" : ["APP_CLOSE", "RCV_ACK"],
    "SYN_SENT" : ["RCV_SYN", "RCV_SYN_ACK", "APP_CLOSE"],
    "ESTABLISHED" : ["APP_CLOSE", "RCV_FIN"],
    "FIN_WAIT_1" : ["RCV_FIN", "RCV_FIN_ACK", "RCV_ACK"],
    "CLOSING" : ["RCV_ACK"],
    "FIN_WAIT_2" : ["RCV_FIN"],
    "TIME_WAIT" : ["APP_TIMEOUT"],
    "CLOSE_WAIT" : ["APP_CLOSE"],
    "LAST_ACK" : ["RCV_ACK"]
}

const traverseTCPStates = evenlist => {
    let estado = "CLOSED"

    for (let i = 0; i < evenlist.length; i++) {
        let eventoActual = evenlist[i];
        let eventosPosibles = matrizEstados[estado];

        if (!eventosPosibles.includes(eventoActual)) {
            return "ERROR";
        }

        estado = matrizEventos[estado + "-" + eventoActual];
    };

    return estado;
}

