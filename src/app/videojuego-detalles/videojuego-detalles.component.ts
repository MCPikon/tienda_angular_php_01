import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Videojuego } from '../models/Videojuego';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-videojuego-detalles',
  templateUrl: './videojuego-detalles.component.html',
  styleUrls: ['./videojuego-detalles.component.css']
})
export class VideojuegoDetallesComponent implements OnInit {
  
  // esto es para cuando no habia routing: 
  // @Input() videojuego:Videojuego = {} as Videojuego;
  // @Output() evento_cancelar = new EventEmitter();

  id_videojuego:number = 0;
  videojuego:Videojuego = {} as Videojuego;

  constructor(private servicioVideojuegos:VideojuegosService, private activatedRouter:ActivatedRoute) { }

  ngOnInit(): void {
    this.id_videojuego = Number(this.activatedRouter.snapshot.paramMap.get("id"));
    this.servicioVideojuegos.obtenerVideojuegosPorId(this.id_videojuego).subscribe(res => this.videojuego = res);
  }

  // cancelar() {
  //   this.evento_cancelar.emit();
  // }

  agregar_producto_al_carrito() {
    this.servicioVideojuegos.agregarAlCarrito(this.id_videojuego, 1).subscribe(res => (res == "ok")
    ?alert("producto agregado al carrito"):alert("no se pudo agregar al carrito"));
  }

}
