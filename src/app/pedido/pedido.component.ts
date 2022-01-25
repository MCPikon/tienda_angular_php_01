import { Component, OnInit } from '@angular/core';
import { Pedido } from '../models/Pedido';

@Component({
  selector: 'app-pedido',
  templateUrl: './pedido.component.html',
  styleUrls: ['./pedido.component.css']
})
export class PedidoComponent implements OnInit {

  pedido:Pedido = {} as Pedido;

  constructor() { }

  ngOnInit(): void {
  }

  finalizarPedido() {
    alert("mandar al servidor: " + this.pedido.nombre + " " 
    + this.pedido.direccion + " " + this.pedido.tarjeta);
  }

}
