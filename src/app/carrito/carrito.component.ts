import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { VideojuegoCarrito } from '../models/VideojuegoCarrito';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-carrito',
  templateUrl: './carrito.component.html',
  styleUrls: ['./carrito.component.css']
})
export class CarritoComponent implements OnInit {

  videojuegosCarrito:VideojuegoCarrito[] = {} as VideojuegoCarrito[];
  
  constructor(private servicioVideojuegos:VideojuegosService, private router:Router) { }

  ngOnInit(): void {
    this.listarVideojuegosCarrito();
  }

  listarVideojuegosCarrito() {
    this.servicioVideojuegos.obtenerVideojuegosCarrito().subscribe(res => this.videojuegosCarrito = res);
  }

  vaciarCarrito() {
    this.servicioVideojuegos.vaciarCarrito().subscribe(res => (res == "ok")
    ?this.videojuegosCarrito = []:alert("no pude vaciar carrito"));
  }

  realizarPedido() {
    if(this.videojuegosCarrito.length === undefined || this.videojuegosCarrito.length == 0) {
      alert("agrega por lo menos un producto para realizar un pedido");
      return;
    }
    this.router.navigate(["pedido"]);
  }

}
