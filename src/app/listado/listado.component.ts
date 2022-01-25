import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { Router } from '@angular/router';
import { Videojuego } from '../models/Videojuego';
import { VideojuegosService } from '../videojuegos.service';

@Component({
  selector: 'app-listado',
  templateUrl: './listado.component.html',
  styleUrls: ['./listado.component.css']
})
export class ListadoComponent implements OnInit {

  //cuando no habia routing:
  //@Output() emisor_de_evento = new EventEmitter();

  info:Videojuego[] = {} as Videojuego[];

  constructor(private servicio:VideojuegosService, private router:Router) { }

  ngOnInit(): void {
    this.servicio.obtenerVideojuegos().subscribe(res => this.info = res);
  }

  verDetalles(v:Videojuego) {
    this.router.navigate(["detalles", v.id]);
    // cuando no habia routing:
    // this.emisor_de_evento.emit(v);
  }

}
