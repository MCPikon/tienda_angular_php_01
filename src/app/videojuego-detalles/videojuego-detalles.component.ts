import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { Videojuego } from '../models/Videojuego';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-videojuego-detalles',
  templateUrl: './videojuego-detalles.component.html',
  styleUrls: ['./videojuego-detalles.component.css']
})
export class VideojuegoDetallesComponent implements OnInit {

  @Input() videojuego:Videojuego = {} as Videojuego;
  @Output() evento_cancelar = new EventEmitter();

  constructor(private servicioVideojuegos:VideojuegosService) { }

  ngOnInit(): void {
  }

  cancelar() {
    this.evento_cancelar.emit();
  }

  agregar_producto_al_carrito() {
    this.servicioVideojuegos.agregarAlCarrito(this.videojuego.id, 1).subscribe(res => (res == "ok")
    ?alert("producto agregado al carrito"):alert("no se pudo agregar al carrito"));
  }

}
