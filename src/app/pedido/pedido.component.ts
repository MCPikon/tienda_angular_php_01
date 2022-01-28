import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Pedido } from '../models/Pedido';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-pedido',
  templateUrl: './pedido.component.html',
  styleUrls: ['./pedido.component.css']
})
export class PedidoComponent implements OnInit {

  pedido:Pedido = {} as Pedido;

  constructor(private servicioVideojuegos:VideojuegosService, private router:Router) { }

  ngOnInit(): void {
  }

  finalizarPedido() {
    //alert("mandar al servidor: " + this.pedido.nombre + " " + this.pedido.direccion + " " + this.pedido.tarjeta);
    this.servicioVideojuegos.registrarPedido(this.pedido).subscribe(res => (res == "ok")?this.pedidoOk():alert("no se pudo registrar el pedido"));
  }

  pedidoOk() {
    alert("pedido realizado correctamente, puedes seguir comprando");
    this.router.navigate(['listado']);
  }

}
