<?php
// File containing the eZMollomOperationCollection class
// SOFTWARE NAME: Mollom extension
// SOFTWARE RELEASE: 0.9
// COPYRIGHT NOTICE: Copyright (C) 2011 Fumaggo  All rights reserved.
// SOFTWARE LICENSE: GNU General Public License v2.0
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.

class eZMollomOperationCollection
{
    /*!
     Constructor
    */
    function eZMollomOperationCollection()
    {
    }
    
    function ezcomment( $session_key  )
    {
		return array( 'status' => true );
    }

}
?>