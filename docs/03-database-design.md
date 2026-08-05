# ERPOS Documentation

Document: Database Design
Version: 1.0
Status: Draft
Last Updated: 2026-08-06
Author: Md. Anisur Rahman

---

# Database Design

## Design Principles

- Normalize data to reduce duplication
- Use foreign keys for relationships
- Use soft delete where appropriate
- Keep audit information (created_by, updated_by)
- Use timestamps on all business tables
- Design for future multi-branch support
- Keep business logic outside the database

---

# Core Modules

## Identity

- Users
- Roles
- Permissions

---

## CRM

- Customers

---

## Device Management

Device information will be stored directly inside the Repair Ticket.

Each repair ticket will contain:

- Brand
- Model
- IMEI
- Serial Number
- Color

---

## Repair Management

- Repair Tickets
- Repair Problems
- Ticket Status
- Ticket Timeline

---

## Finance

- Payments
- Payment Methods

---

## Technician

- Technicians
- Technician Assignments

---

## Storage

- Storage Locations

---

## Inventory

- Categories
- Products
- Stock Management
- Suppliers
- Purchase Orders

---

## System

- Notifications
- Activity Logs
- Settings

---

# Database Entities

## Identity

- users
- roles
- permissions

---

## Customer

- customers

---

## Device

Device information will be stored in the `repair_tickets` table.

Fields:

- brand
- model
- imei
- serial_number
- color

---

## Repair

- repair_tickets
- repair_problems
- repair_statuses
- repair_timelines

---

## Finance

- payments
- payment_methods

---

## Technician

- technicians

---

## Storage

- storage_locations

---

## Inventory

- categories
- products
- stock_transactions
- suppliers

---

## System

- notifications
- activity_logs
- settings
